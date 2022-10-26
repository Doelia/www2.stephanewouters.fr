<?php include('header.php'); ?>

<?php

include('../connexion.php');

$id = $_GET['id'];

$sth = $db->prepare("DELETE FROM products WHERE id=?");
$l = $sth->execute([$id]);

?>

Produit supprimé avec succés.

<?php include('footer.php'); ?>
