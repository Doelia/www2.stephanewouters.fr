<?php include('header.php'); ?>

<?php

include('connexion.php');

$result = $db->query("SELECT * FROM customers LIMIT 20");

?>

<h2>Liste des clients</h2>
<table>
    <tr>
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
    </tr>
    <?php while ($ligne = $result->fetch()) { ?>
    <tr>
        <td> <?php echo $ligne['customerNumber']; ?> </td>
        <td> <?php echo $ligne['contactLastName']; ?> </td>
        <td> <?php echo $ligne['contactFirstName']; ?></td>
        <td> <?php echo $ligne['phone']; ?></td>
    </tr>
    <?php } ?>

</table>


<?php include('footer.php'); ?>
