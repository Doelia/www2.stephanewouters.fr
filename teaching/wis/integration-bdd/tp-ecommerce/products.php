<?php include('header.php'); ?>

<?php

include('connexion.php');

$result = $db->query("SELECT * FROM products");

?>

<h2>Liste des produits</h2>

<a href="ajout_produit_formulaire.php" class="button">Ajouter un produit</a>

<table>
    <tr>
        <th>Référence</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    <?php while ($ligne = $result->fetch()) { ?>
    <tr>
        <td> <?php echo $ligne['productCode']; ?> </td>
        <td> <?php echo $ligne['productName']; ?> </td>
        <td> <?php echo $ligne['buyPrice']; ?>$</td>
        <td><a href="supprimer_produit.php?productCode=<?php echo $ligne['productCode']; ?>">Supprimer</a></td>
    </tr>
    <?php } ?>

</table>


<?php include('footer.php'); ?>
