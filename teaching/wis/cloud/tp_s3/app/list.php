<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
    'endpoint' => 'http://cellar-c2.services.clever-cloud.com',
    'region' => 'eu-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => "VIWLOYEQK6UTJ64AIW1U",
        'secret' => "",
    ]
]);

try {
    $objects = $s3->listObjects([
        'Bucket' => 'wis'
    ]);
    foreach ($objects['Contents']  as $object) {
        echo $object['Key'] . PHP_EOL;
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

