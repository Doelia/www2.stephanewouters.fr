<div class="my-5 category-hover category-hiddenable category-hidden">
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

        <?php require('includes/projects_json.php') ?>
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
