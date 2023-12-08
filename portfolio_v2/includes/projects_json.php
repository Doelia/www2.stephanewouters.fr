<?php

$projects = [
    [
        'id' => 'ants',
        'name' => 'Ants simulator',
        'year' => '2023',
        'description' => 'Ants have to find and bring food back to their nest, using only pheromones.',
        'technologies' => [
            'canvas' => ['bg-html', 'fa-brands fa-html5'],
            'react' => ['bg-react', 'fa-brands fa-react'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://ants.doelia.fr'],
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/ants']
        ],
    ],
    [
        'id' => 'pk',
        'name' => 'Progress Knight: Remastered',
        'year' => '2023',
        'description' => 'Incremental mobile game in a medieval world where you choose your career path, gain skills, and make decisions that shape your ultimate destiny.',
        'technologies' => [
            'react native' => ['bg-react', 'fa-brands fa-react'],
        ],
        'links' => [
            'Download' => ['fa-regular fa-play', 'https://stephanewouters.fr/pk'],
        ],
    ],
    [
        'id' => 'playthatmap',
        'name' => 'PlayThatMap',
        'year' => '2023',
        'description' => 'Minecraft map hosting service. Play a variety of pvp/adventure maps, pre-configured & ready-to-play, without download.',
        'technologies' => [
            'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],
            'Docker' => ['bg-docker', 'fa-brands fa-docker'],
            'AWS' => ['bg-aws', 'fa-brands fa-aws'],
        ],
        'links' => [
            'playthatmap.net' => ['fa-regular fa-play', 'https://playthatmap.net'],
        ],
    ],
    [
        'id' => 'bakamongo',
        'name' => 'Bakamon GO!',
        'year' => '2022',
        'description' => "Un jeu inspiré par la BD parodique Bakamon et pokemon go. Vous incarnez crétin et vous partez à la recherche des bakamon sur une carte virtuelle. Entubez les tous !",
        'technologies' => [
            'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],
            'Mercure.rocks' => ['bg-mercure', 'fa-light fa-temperature-snow'],
            'PostgreSQL' => ['bg-postgres', 'fa-solid fa-database'],
            'PgRouting' => ['bg-postgres', 'fa-solid fa-route'],
            'OpenLayers' => ['bg-openlayers', 'fa-solid fa-map'],
            'React' => ['bg-react', 'fa-brands fa-react'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://bakamon.doelia.fr/'],
        ],
    ],
    [
        'id' => 'gemwar',
        'name' => 'Gemwar.io',
        'year' => '2022',
        'description' => 'A multiplayer IDLE game where you have to collect points, gain levels and fight againt others players.',
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://gemwar.io'],
        ]
    ],
    [
        'id' => 'teletravail',
        'name' => 'Presence planning',
        'year' => '2021',
        'description' => 'A very simple and easy-to-use application to consult and manage employees presence/remote state at the office.',
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://planning-teletravail.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/Doelia/planning-teletravail'],
        ]
    ],
    [
        'id' => 'fishflocking',
        'name' => 'Fish Flocking',
        'year' => '2018',
        'description' => 'A simulation of fish flocking behavior, using the Boids algorithm. Created for poisson-soluble.com web agency website.',
        'technologies' => [
            'canvas' => ['bg-html', 'fa-brands fa-html5'],
            'JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://fish-flocking.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/fish-flocking']
        ]
    ],
    [
        'id' => 'heliko',
        'name' => 'Heliko',
        'year' => '2015',
        'description' => 'Un jeu de rythme mobile, développé pendant mon master dans un cadre universitaire',
        'technologies' => [
            'Unity' => ['bg-dark', 'fa-brands fa-unity'],
        ],
        'links' => [
            'Download' => ['fa-brands fa-android', 'https://stephanewouters.fr/games/heliko/'],
        ]
    ],
    [
        'id' => 'survivia',
        'name' => 'Survivia',
        'year' => '2012 - 2015',
        'description' => "Un serveur minecraft PVP que j'ai fondé et géré pendant 3 ans. Comunauté de 300.000 membres. Réseau de 12 serveurs linux. Les serveurs sont fermés et la commaunauté s'est dissoute mais les modes de jeux développés restent jouble sur serveur privé.",
        'technologies' => [
            'Java' => ['bg-java', 'fa-brands fa-java'],
            'Linux' => ['bg-dark', 'fa-brands fa-linux'],
        ],
        'links' => [
            'Mode de jeux' => ['fa-regular fa-play', 'https://survivia.net'],
            'Memory fan video' => ['fa-brands fa-youtube', 'https://www.youtube.com/watch?v=VKrGqg8MAX0'],
        ]
    ],
    [
        'id' => 'bourbaki',
        'name' => 'Jeu du petit carré',
        'year' => '2014',
        'description' => 'Jeu au tour par tour, chaque joueur pose un trait sur une grille. Le but est de former un carré. Le joueur qui forme le plus de carrés gagne.',
        'technologies' => [
            'Golang' => ['bg-golang', 'fa-brands fa-golang'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/bourbaki'],
        ]
    ],
    [
        'id' => 'whiteboard',
        'name' => 'Whiteboard',
        'year' => '2014',
        'description' => 'Un tableau blanc collaboratif en ligne',
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://whiteboard.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/Doelia/realtimeboard']
        ]
    ],
    [
        'id' => 'defensia',
        'name' => 'Tower defense multiplayer',
        'year' => '2013',
        'description' => 'Un jeu de tower defense multijoueur en ligne.',
        'technologies' => [
            'PHP' => ['bg-php', 'fa-brands fa-php'],
            'pthreads' => ['bg-php', 'fa-brands fa-php'],
            'JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/defensia'],
        ],
    ],
    [
        'id' => 'dominion',
        'name' => 'Dominion',
        'year' => '2012',
        'description' => 'Un clone libre du jeu de cartes Dominion. Jouable en ligne en multijoueur.',
        'technologies' => [
            'Java' => ['bg-java', 'fa-brands fa-java'],
            'JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://dominion.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/dominion'],
        ],
    ],
    [
        'id' => 'minelia',
        'name' => 'Minelia',
        'year' => '2012',
        'description' => 'Un jeu web de stratégie, réalisé en 48h pour le Ludum Dare.',
        'technologies' => [
            'JS' => ['bg-js', 'fa-brands fa-js'],
            'jQuery' => ['bg-jquery', 'fa-brands fa-js'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://minelia.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/doelia/minelia'],
        ],
    ],
    [
        'id' => 'doewar',
        'name' => 'DoeWar',
        'year' => '2009',
        'description' => "Mon premier projet PHP, j'avais 16 ans. Un jeu IDLE multijoueur, ancétre de Gemwar.io.",
        'technologies' => [
            'PHP 5.2' => ['bg-php', 'fa-brands fa-php'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://doewar-2009.doelia.fr/'],
            'github' => ['fa-brands fa-github', 'https://github.com/Doelia/doewar-2009'],
        ],
    ]
];

