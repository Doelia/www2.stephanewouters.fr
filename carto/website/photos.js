$(function() {
    $.ajax({
        dataType: "json",
        url: "/carto/app-stecroix/points.geojson",
        success: function(geojson) {
            $('.images .picture').each(function () {
                var src = $(this).find('img').attr('src');
                var feature = geojson.features.find(v => v.properties.picture == src);
                if (feature) {
                    const position = feature.geometry.coordinates;
                    console.log(src, position);
                    $(this).append('<iframe class="minimap" src="minimap.html?lat=' + position[1] + '&lng=' + position[0] + '" frameborder="0"></iframe>');
                }
            });
        }
    })
});
