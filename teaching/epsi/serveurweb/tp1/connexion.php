<?php

// Afficher tous les types d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**** MODIFIER LES DONNÉES DE CONFIGURATION *****/
$host = "mysql";
$port = 3306;
$user = "root";
$password = "motdepasse";
$dbname = "nomdelabdd";
/*************************************************/

$host = "mysql";
$port = 3306;
$user = "stephane.wouters";
$password = "wugaxu";
$dbname = "serveurweb_tp1_catalogue";

$db = new PDO("mysql:dbname=$dbname;host=$host:$port", $user, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$r = $db->query("SELECT * FROM information_schema.tables WHERE table_schema='$dbname' AND table_name='products' LIMIT 1;");
if (!$r->fetch()) {
    $db->exec("
        CREATE TABLE `products` (
          `id` int(11) NOT NULL,
          `name` varchar(255) NOT NULL,
          `price` float NOT NULL,
          `image` varchar(255) NOT NULL,
          `description` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
    ");
    $db->exec("
        INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`) VALUES
        (2, 'Chocolat noir et oranges', 1.2, 'https://lacookiterie.fr/wp-content/uploads/2020/06/DSC1752-copie-e1591869283381.jpg', 'Un cookie équilibré avec une dominante chocolat noir relevé par de fins morceaux d’oranges confites pour un cookie fin et moelleux'),
        (3, 'Caramel au Beurre salé', 0.8, 'https://lacookiterie.fr/wp-content/uploads/2020/06/Caramel-sqr-300x300.jpg', 'Le mini cookie gourmand tout caramel au beurre salé est très gourmand, pour fondre de plaisir'),
        (5, 'Chocolat au lait', 1.2, 'https://lacookiterie.fr/wp-content/uploads/2020/06/DSC1817-scaled-e1591862109790-300x300.jpg', 'Un cookie simple et classique, avec juste beaucoup de bonnes pépites de chocolat au lait');
    ");
}
