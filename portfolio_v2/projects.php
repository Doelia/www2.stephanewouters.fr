<?php require('includes/projects_json.php') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stéphane Wouters / Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4ad02e5046.js" crossorigin="anonymous"></script>
    <?php require('includes/style.php') ?>
</head>
<body data-bs-theme="light">
<div class="container">
    <div class="row">

        <div class="position-fixed pt-5">
            <?php require('includes/profile.php') ?>
        </div>

        <div class="col-6 pt-5">
        </div>

        <div class="col">

            <div class="my-5">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-seedling opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Side projects</h2>
                        <div class="opacity-75 small fst-italic">Since 2009</div>
                    </div>
                </div>

                <div class="m-3 border-start border-gray ps-3 pt-1 pb-1">
                    <div class="d-flex flex-column gap-5 pt-3">

                        <?php foreach ($projects as $project): ?>

                            <div id="<?= $project['id'] ?>">
                                <div class="d-flex align-items-center">
                                    <img src="thumbnails/<?= $project['id'] ?>.png" alt="" width="40" height="40" class="me-3">
                                    <div>
                                        <h3 class="fs-6 fw-bold p-0 m-0">
                                            <?= $project['name'] ?>
                                            <span class="fw-light small opacity-50">- <?= $project['year'] ?></span>
                                        </h3>
                                        <div class="d-flex flex-wrap gap-1 mt-2 opacity-75" style="zoom: .75">
                                            <?php foreach ($project['technologies'] as $title => $args): ?>
                                                <div class="rounded-1 d-flex align-items-center small <?= $args[0] ?>">
                                                    <div class="px-1"> <i class="text-white <?= $args[1] ?>"></i> </div>
                                                    <div class="px-2 bg-white bg-opacity-75 text-dark">
                                                        <?= $title ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                                <p class="opacity-75 mt-3 mb-2 fst-italic small">
                                    <?= $project['description'] ?>
                                </p>

                                <div class="d-flex gap-3 small">
                                    <?php foreach ($project['links'] as $title => $link): ?>
                                        <a href="<?= $link[1] ?>" class="text-body fw-bold text-hover-animated">
                                            <i class="<?= $link[0] ?> me-1"></i>
                                            <?= $title ?>
                                        </a>
                                    <?php endforeach ?>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
