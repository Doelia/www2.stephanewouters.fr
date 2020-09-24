<?php

$line = implode(',', $_POST);
file_put_contents('products.csv', "$line\n", FILE_APPEND);

?>

Produit ajouté.
<br>
<a href="index.php">Retour au catalogue</a>
