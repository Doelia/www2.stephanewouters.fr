<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stéphane Wouters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4ad02e5046.js" crossorigin="anonymous"></script>
    <script src="assets/canvas/main.js" type="module" defer></script>
    <?php require('includes/style.php') ?>
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
</head>
<body data-bs-theme="dark">

<div>
    <canvas class="h-100 w-100 position-fixed opacity-25" id="canvas"></canvas>
    <div id="canvas_assets" class="d-none">
        <img src="assets/canvas/assets/ant.png" alt="" id="ant">
        <img src="assets/canvas/assets/fish.png" alt="" id="fish">
    </div>
</div>

<div class="container position-relative p-4 p-sm-5">
    <div class="row">

        <div class="col-lg-5 p-4">
            <?php require('includes/profile.php') ?>
        </div>

        <div class="col">

            <div class="my-5 category-hover">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-user-chef opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">CURRENT JOB</h2>
                        <div class="opacity-75 small fst-italic">Since 2015</div>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pt-1">
                    <span class="fst-italic fw-light">Lead developer -</span>
                    <a href="https://poisson-soluble.com" class="text-hover-animated text-body fw-bold canvas-turtle-trigger" data-turtle_type="fishes">Poisson Soluble</a>
                </div>
            </div>

            <div class="my-5 category-hover">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon" style="height: 40px; width: 40px; line-height: 40px">
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
                            <a href="https://stephanewouters.fr/teaching/epsi/serveurweb.html" class="text-hover-animated text-body fw-bold">Serveurs web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 3 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/cloud.html" class="text-hover-animated text-body fw-bold">Cloud & systèmes web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 2 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/js.html" class="text-hover-animated text-body fw-bold">JavaScript</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 1 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/website_bdd.html" class="text-hover-animated text-body fw-bold">Base de données avec SQL et PHP</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="my-5 category-hover">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon">
                        <i class="fa-solid fa-seedling opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Side projects</h2>
                        <div class="opacity-75 small fst-italic">I made stuff, since 2007</div>
                    </div>
                </div>

                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <ul class="list-unstyled d-flex flex-column gap-1">
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <a href="https://ants.doelia.fr" class="text-hover-animated text-body fw-bold canvas-turtle-trigger" data-turtle_type="ants">Ants simulator</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <a href="https://stephanewouters.fr/pk/" class="text-hover-animated text-body fw-bold">Progress Knight: Remastered</a>
                            <span class="fst-italic fw-light">Mobile IDLE game</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="https://playthatmap.net" class="text-hover-animated text-body fw-bold">PlayThatMap</a>
                            <span class="fst-italic fw-light">Minecraft map hosting service</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="https://bakamon.doelia.fr/" class="text-hover-animated text-body fw-bold">Bakamon GO!</a>
                        </li>
                    </ul>

                    <a href="projects.php" class="text-body opacity-50 fst-italic">View all...</a>

                </div>
            </div>

            <div class="my-5 grayscale-hover-effect category-hover">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon">
                        <i class="fa-solid fa-rocket opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Technologies</h2>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <div>
                        <span class="text-uppercase opacity-75 small">Favorite stack</span>
                        <div>
                            <span class="fw-bold me-1">Backend</span>
                            <span class="fst-italic fw-light">Docker, Symfony, PostgreSQL, Mercure.rocks</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Front-end</span>
                            <span class="fst-italic fw-light">React, React native, Bootstrap</span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-uppercase opacity-75 small">Occasionally used</span>
                        <div>
                            <span class="fw-bold me-1">Devops</span>
                            <span class="fst-italic fw-light">Docker swarm, OpenShift, AWS</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Backend</span>
                            <span class="fst-italic fw-light">Node.JS, Python, Bash, Golang</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Front-end</span>
                            <span class="fst-italic fw-light">Vue.js, Angular, Leaflet, Socket.io, GraphQL</span>
                        </div>
                    </div>

                </div>
            </div>

    </div>
</div>
<h1></h1>
</body>
</html>
