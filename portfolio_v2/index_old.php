<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stéphane Wouters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4ad02e5046.js" crossorigin="anonymous"></script>
    <?php require('includes/style.php') ?>
</head>
<body data-bs-theme="light">
<div class="container">
    <div class="row">

        <div class="col-6 pt-5">
            <?php require('includes/profile.php') ?>
        </div>

        <div class="col">

<!--            <div>-->
<!--                <button onclick="toggleTheme()"></button>-->
<!--            </div>-->

            <div class="my-5">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-user-chef opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">CURRENT JOB</h2>
                        <div class="opacity-75 small fst-italic">Since 2015</div>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pt-1">
<!--                    <div class="opacity-75 small fst-italic">Since 2015</div>-->
                    <span class="fst-italic fw-light">Lead developer -</span>
                    <a href="https://poisson-soluble.com" class="text-hover-animated text-body fw-bold">Poisson Soluble</a>
                </div>
            </div>

            <div class="my-5">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-chalkboard-user opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Courses</h2>
                        <div class="opacity-75 small fst-italic">Teaching at EPSI School</div>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pt-1">
                    <ul class="list-unstyled d-flex flex-column gap-1">
                        <li>
                            <span class="fst-italic fw-light">EPSI 1 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">Serveurs web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 3 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">Cloud & systèmes web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 2 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">JavaScript</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="my-5">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-seedling opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Side projects</h2>
                    </div>
                </div>

                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <ul class="list-unstyled d-flex flex-column gap-1">
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">Ants simulator</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">Progress Knight: Remastered</a>
                            <span class="fst-italic fw-light">Mobile IDLE game</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">PlayThatMap</a>
                            <span class="fst-italic fw-light">Minecraft map hosting service</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="" class="text-hover-animated text-body fw-bold">Bakamon GO!</a>
                        </li>
                    </ul>

                    <a href="projects.html" class="text-body opacity-50 fst-italic">View all...</a>

                </div>
            </div>

            <div class="my-5  grayscale-hover-effect">
                <div class="d-flex align-items-center">
                    <div class="text-bg-yellow rounded text-center" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-rocket opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Technologies</h2>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <div class="fw-light small">Favorite stack</div>
                    <div class="d-flex flex-wrap gap-1 mt-2 opacity-75" style="">
                        <?php
                            $technologies = [
                                'Docker' => ['bg-docker', 'fa-brands fa-docker'],

                                'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],

                                'PostgreSQL' => ['bg-postgres', 'fa-solid fa-database'],

                                'React' => ['bg-react', 'fa-brands fa-react'],
                                'React native' => ['bg-react', 'fa-brands fa-react'],
                                'Mercure rocks' => ['bg-mercure', 'fa-light fa-temperature-snow'],

                                'Bootstrap' => ['bg-bootstrap', 'fa-brands fa-bootstrap'],

                            ];
                        ?>
                        <?php foreach ($technologies as $title => $args): ?>
                            <div class="rounded-1 d-flex align-items-center small <?= $args[0] ?>">
                                <div class="px-1"> <i class="text-white <?= $args[1] ?>"></i> </div>
                                <div class="px-2 bg-white bg-opacity-90 text-dark">
                                    <?= $title ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-3 fw-light small">Occasionally used</div>
                    <div class="d-flex flex-wrap gap-1 mt-2 opacity-75" style="">
                        <?php
                        $technologies = [
                            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
                            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
                            'Angular' => ['bg-angular', 'fa-brands fa-angular'],

                            'OpenLayers' => ['bg-openlayers', 'fa-solid fa-map'],
                            'Leaflet' => ['bg-leaflet', 'fa-regular fa-leaf-maple'],
                            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],

                            'Golang' => ['bg-golang', 'fa-brands fa-golang'],
                            'Python' => ['bg-python', 'fa-brands fa-python'],
//                            'jQuery' => ['bg-jquery', 'fa-brands fa-js'],
//                            'Unity' => ['bg-dark', 'fa-brands fa-unity'],
                            'GraphQL' => ['bg-graphql', 'fa-sharp fa-solid fa-circle-nodes'],

                            'AWS' => ['bg-aws', 'fa-brands fa-aws'],
                        ];
                        ?>
                        <?php foreach ($technologies as $title => $args): ?>
                            <div class="rounded-1 d-flex align-items-center small <?= $args[0] ?>">
                                <div class="px-1"> <i class="text-white <?= $args[1] ?>"></i> </div>
                                <div class="px-2 bg-white bg-opacity-90 text-dark">
                                    <?= $title ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

    </div>
</div>
<h1></h1>
</body>
</html>
