<?php

// Afficher tous les types d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new PDO("mysql:dbname=$DATABASE_NAME;host=$DATABASE_HOST:$DATABASE_PORT", $DATABASE_USERNAME, $DATABASE_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create schema if not exists
$r = $db->query("SELECT * FROM information_schema.tables WHERE table_schema='$DATABASE_NAME' AND table_name='products' LIMIT 1;");
if (!$r->fetch()) {
    $db->exec("
        CREATE TABLE `products` (
          `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `price` float NOT NULL,
          `image` varchar(255) NOT NULL,
          `description` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
    ");
    $db->exec("
        INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`) VALUES
        (2, 'Chocolat noir et oranges', 1.2, 'https://stephanewouters.fr/teaching/epsi/serveurweb/samples/catalogue/assets/framboise.webp', 'Un cookie équilibré avec une dominante chocolat noir relevé par de fins morceaux d’oranges confites pour un cookie fin et moelleux'),
        (3, 'Caramel au Beurre salé', 0.8, 'https://stephanewouters.fr/teaching/epsi/serveurweb/samples/catalogue/assets/pecancc.webp', 'Le mini cookie gourmand tout caramel au beurre salé est très gourmand, pour fondre de plaisir'),
        (5, 'Chocolat au lait', 1.2, 'https://stephanewouters.fr/teaching/epsi/serveurweb/samples/catalogue/assets/rhumraisin.webp', 'Un cookie simple et classique, avec juste beaucoup de bonnes pépites de chocolat au lait');
    ");
}
