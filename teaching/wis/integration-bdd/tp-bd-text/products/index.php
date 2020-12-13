<!DOCTYPE html>
<html>
<head>
	<title>Cookies Shop</title>
    <style>

        .container {
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
            font-family: Tahoma;
        }

        .cookie {
            width: 300px;
            float: left;
            border: 1px solid lightgray;
            margin: 10px;
            padding: 10px;
            height: 450px;
        }

        img {
            width: 100%;
        }

        .clear {
            clear: both;
        }

    </style>
</head>
<body>

	<div class="container">

		<h1>Les cookies</h1>

		<?php

		$products = array_map('str_getcsv', file('products.csv'));

		foreach ($products as $p) {
			?>
			<div class="cookie">
			  <img src="<?php echo $p[3]; ?>">
			  <div>
			    <h5><?php echo $p[1]; ?></h5>
			    <p><?php echo $p[4]; ?></p>
			  </div>
			</div>
			<?php
		}
		?>

        <div class="clear">
            <br>
            <a href="add_product.html">Ajouter un cookie au catalogue</a>
        </div>
	</div>

</body>
</html>
