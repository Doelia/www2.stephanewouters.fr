<?php

$host = "localhost";
$port = 8889;
$user = "root";
$password = "root";
$dbname = "store";

$db = new PDO("mysql:dbname=$dbname;host=$host:$port", $user, $password);

