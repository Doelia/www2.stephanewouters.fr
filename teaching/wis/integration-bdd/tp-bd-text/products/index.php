
<!DOCTYPE html>
<html>
<head>
<title>Cookies Shop</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>


<div class="container">

<h2>Les cookies</h1>
<div class="card-deck">

<?php

$products = array_map('str_getcsv', file('products.csv'));


foreach ($products as $p) {
	?>
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="<?php echo $p[3]; ?>" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $p[1]; ?></h5>
	    <p class="card-text"><?php echo $p[4]; ?></p>
	  </div>
	</div>
	<?php	
}

?>

</div>
</div>

</body>
</html>
