<?php include('header.php'); ?>

<?php

include('../connexion.php');

$result = $db->query("SELECT * FROM products");

?>

<h2>Liste des produits</h2>

<a href="add_product.php" class="button">Ajouter un produit</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    <?php while ($p = $result->fetch()) { ?>
    <tr>
        <td> <?php echo $p['id']; ?> </td>
        <td> <?php echo $p['name']; ?> </td>
        <td> <?php echo $p['description']; ?> </td>
        <td> <?php echo $p['price']; ?>€ </td>
        <td><a href="delete_product.php?id=<?php echo $p['id']; ?>">Supprimer</a></td>
    </tr>
    <?php } ?>

</table>


<?php include('footer.php'); ?>
