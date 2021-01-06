<?php

// Afficher tous les types d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$port = 8889;
$user = "root";
$password = "root";
$dbname = "store";

$db = new PDO("mysql:dbname=$dbname;host=$host:$port", $user, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
