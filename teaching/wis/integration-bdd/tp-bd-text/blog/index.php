<!DOCTYPE html>
<html>
	<head>
		<title>Mon blog</title>
		<style>
			.content { max-width: 800px; margin-left: auto; margin-right: auto; }
		</style>
	</head>
	<body>

	<div class="content">

		<h1>Articles</h1>

		<?php

		$file = fopen("articles.txt", "r");
		while (($line = fgets($file)) !== false) {
			echo '<h2>' . $line . '</h2>';
			echo '<b>' . fgets($file) . '</b>';
			echo '<p>' . fgets($file) . '</p>';
		}

		fclose($file);

		?>

	</div>

	</body>
</html>

