<?php include('header.php'); ?>

<?php

include('connexion.php');

$productCode = $_GET['productCode'];

$sth = $db->prepare("DELETE FROM products WHERE productCode=?");
$l = $sth->execute([$productCode]);

?>

Produit supprimé avec succés.

<?php include('footer.php'); ?>
