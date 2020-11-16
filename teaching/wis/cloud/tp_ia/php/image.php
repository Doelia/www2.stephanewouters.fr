<?php

# includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# imports the Google Cloud client library
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

# instantiates a client
$imageAnnotator = new ImageAnnotatorClient();

# the name of the image file to annotate
$fileName = __DIR__ . '/butterfly-4756682_960_720.jpg';

# prepare the image to be annotated
$image = file_get_contents($fileName);

# performs label detection on the image file
$response = $imageAnnotator->labelDetection($image);
$labels = $response->getLabelAnnotations();

if ($labels) {
    echo("Labels:" . PHP_EOL);
    foreach ($labels as $label) {
        echo($label->getDescription() . PHP_EOL);
    }
} else {
    echo('No label found' . PHP_EOL);
}

