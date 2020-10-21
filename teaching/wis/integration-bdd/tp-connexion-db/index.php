<?php

error_reporting(-1);

// Modifier les valeurs des variables par vos informations
$host = "localhost";
$user = "root";
$password = "";
$port = 3306;
$dbname = "store";

$db = new PDO("mysql:dbname=$dbname;host=$host:$port", $user, $password);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Produits</title>
</head>
<body>

<h1>Liste des produits</h1>
<table>

	<tr>
		<th>Nom du produit</th>
		<th>Prix</th>
	</tr>
	<?php foreach ($db->query("select * from products limit 10") as $p) { ?>
		<tr>
			<td><?php echo $p['productName']; ?></td>
			<td><?php echo $p['buyPrice']; ?></td>
		</tr>
	<?php } ?>
</table>

</body>
</html>

