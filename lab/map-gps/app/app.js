const p1 = [43.7524, 3.9077, 43.7754, 3.9301];
const p2 = [43.7535, 3.8865, 43.7744, 3.9069];

mapboxgl.accessToken = 'pk.eyJ1IjoiZG9lbGlhIiwiYSI6ImNqN3JydGhiZDN6cHEzM251dXVsZ3FodjQifQ.mtRIEu7WPakLBYQRVgV52g';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/outdoors-v11',
    center: [3.9060693, 43.766189],
    zoom: 14,
});

map.on('load', () => {
    map.addSource('source_suque', {
        type: 'image',
        url: 'https://stephane-tests.s3.eu-west-3.amazonaws.com/maps/suque.png',
        coordinates: [
            [p1[1], p1[2]],
            [p1[3], p1[2]],
            [p1[3], p1[0]],
            [p1[1], p1[0]]
        ]
    });
    map.addLayer({
        "id": "overlay_suque",
        "source": "source_suque",
        "type": "raster",
    })

    map.addSource('source_ceceles', {
        type: 'image',
        url: 'https://stephane-tests.s3.eu-west-3.amazonaws.com/maps/ceceles.png',
        coordinates: [
            [p2[1], p2[2]],
            [p2[3], p2[2]],
            [p2[3], p2[0]],
            [p2[1], p2[0]]
        ]
    });
    map.addLayer({
        "id": "overlay_ceceles",
        "source": "source_ceceles",
        "type": "raster",
    })

    map.addControl(
        new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
    );

    const images = [];

    Promise.all(
        images.map(img => new Promise((resolve, reject) => {
            map.loadImage(img.url, function (error, res) {
                map.addImage(img.id, res)
                resolve();
            })
        }))
    )
        .then(() => {

            $(function() {
                $.ajax({
                    dataType: "json",
                    url: "points.geojson",
                    success: function (geojson) {

                        geojson.features = geojson.features.filter(f => f.properties.picture);
                        geojson.features = geojson.features.map(f => ({
                            ...f,
                            geometry: {
                                type: f.geometry.type,
                                coordinates: [
                                    f.geometry.coordinates[0] + 0.0001,
                                    f.geometry.coordinates[1],
                                ]
                            }
                        }))

                        map.addSource('points', {
                            'type': 'geojson',
                            'data': geojson
                        });

                        map.addLayer({
                            'id': 'points',
                            'source': 'points',
                            'type': 'circle',
                            'paint': {
                                'circle-radius': {
                                    'base': 2,
                                    'stops': [[12, 2], [22, 180]]
                                },
                                'circle-color': 'Yellow',
                                'circle-stroke-width': {
                                    'base': 1.25,
                                    'stops': [[12, 2], [22, 180]]
                                },
                                'circle-stroke-opacity': 0,
                            },
                        });


                        map.on('click', 'points', function(e) {
                            var coordinates = e.features[0].geometry.coordinates.slice();
                            var picture_url = e.features[0].properties.picture;

                            new mapboxgl.Popup()
                                .setLngLat(coordinates)
                                .setHTML(`
                                        <div class="popup">
                                           <a href="${picture_url}" target="_blank">
                                           <img src="${picture_url}" class="picture">
                                            </a>
                                        </div>
                                    `)
                                .addTo(map);
                        });

                    }
                })
            })
        })

})
