<?php

$line = $_POST['id'] . ',' . $_POST['name'] . ','. $_POST['price'] . ',' . $_POST['picture'] . ',' . $_POST['description'];
file_put_contents('products.csv', "$line\n", FILE_APPEND);

?>

Produit ajouté.
<br>
<a href="index.php">Retour au catalogue</a>
