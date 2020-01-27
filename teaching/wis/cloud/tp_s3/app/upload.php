<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

if (isset($_FILES['image'])) {

    $file_name = $_FILES['image']['name'];
    $temp_file_location = $_FILES['image']['tmp_name'];

    $s3 = new Aws\S3\S3Client([
        'endpoint' => 'http://cellar-c2.services.clever-cloud.com',
        'region' => 'eu-east-1',
        'version' => 'latest',
        'credentials' => [
            'key' => "VIWLOYEQK6UTJ64AIW1U",
            'secret' => "",
        ]
    ]);

    $result = $s3->putObject([
        'Bucket' => 'wis',
        'Key' => $file_name,
        'ACL' => 'public-read',
        'SourceFile' => $temp_file_location
    ]);

    var_dump($result);

} else {
    echo "Aucune image trouvée.";
}

?>

<a href="form.php">Retour au formulaire</a>
