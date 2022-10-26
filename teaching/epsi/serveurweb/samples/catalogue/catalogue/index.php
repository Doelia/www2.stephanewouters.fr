<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <?php
        include('connexion.php');
        $result = $db->query("SELECT * FROM products limit 20");
        ?>

        <h2>Liste des produits</h2>

        <div>
            <a href="admin" style="text-align: right">Accès admin</a>
        </div>

        <div class="products">
            <?php while ($ligne = $result->fetch()) { ?>
                <div class="product">
                    <img src="<?php echo $ligne['image']; ?>" alt="">
                    <div>
                        <h5><?php echo $ligne['name']; ?></h5>
                        <p><?php echo $ligne['price']; ?> EUR</p>
                        <p><?php echo $ligne['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</body>
</html>

