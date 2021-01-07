<?php include('header.php'); ?>

<?php

include('connexion.php');

// Récupération des données du formulaire dans des variables
$productCode = $_POST['productCode'];
$productName = $_POST['productName'];
$buyPrice = $_POST['buyPrice'];
$quantityInStock = $_POST['quantityInStock'];

$sth = $db->prepare("INSERT INTO products (productCode, productName, buyPrice, quantityInStock) VALUES (?, ?, ?, ?)");
$l = $sth->execute([$productCode, $productName, $buyPrice, $quantityInStock]);

?>

Produit ajouté avec succés.

<?php include('footer.php'); ?>
