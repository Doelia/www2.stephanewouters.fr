<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <?php

include('connexion.php');

$result = $db->query("SELECT * FROM products");

?>

<h2>Liste des produits</h2>

<?php while ($ligne = $result->fetch()) { ?>
    <div class="product">
        <img src="https://source.unsplash.com/200x150/?automobile&sig=<?php echo $ligne['productName']; ?>" alt="">
        <div>
            <h5><?php echo $ligne['productName']; ?></h5>
            <p><?php echo $ligne['buyPrice']; ?> USD</p>
            <p><?php echo $ligne['quantityInStock']; ?> en stock</p>
        </div>
    </div>
<?php } ?>


</div>

<div class="clear"></div>
<a href="products.php">Accès admin</a>
</body>
</html>

