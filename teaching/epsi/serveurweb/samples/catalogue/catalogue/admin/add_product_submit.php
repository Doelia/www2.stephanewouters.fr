<?php include('header.php'); ?>

<?php

include('../connexion.php');

// Récupération des données du formulaire dans des variables
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];

$sth = $db->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
$l = $sth->execute([$name, $price, $description, $image]);

?>

Produit ajouté avec succés.

<?php include('footer.php'); ?>
