<?php

# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Language\LanguageClient;

# Your Google Cloud Platform project ID
$projectId = 'YOUR_PROJECT_ID';

# Instantiates a client
$language = new LanguageClient([
    'projectId' => $projectId
]);

# The text to analyze
$text = "Les fauteuils de la salle 7 commencent a sérieusement être très usés et fatigué. 
Au prix de la séance, la moindre des choses c'est d'avoir un fauteuil confortable. 
Nettoyage entre deux séances complètement oublier aussi,c'est inadmissible.
";

# Detects the sentiment of the text
$annotation = $language->analyzeSentiment($text);
$sentiment = $annotation->sentiment();

echo 'Text: ' . $text . '
Sentiment: ' . $sentiment['score'] . ', ' . $sentiment['magnitude'];

