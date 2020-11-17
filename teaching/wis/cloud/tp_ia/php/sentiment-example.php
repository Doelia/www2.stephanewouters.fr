<?php

# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Language\LanguageClient;

# Instantiates a client
$language = new LanguageClient();

# The text to analyze
$text = "TYPE TEXT HERE";

# Detects the sentiment of the text
$annotation = $language->analyzeSentiment($text);
$sentiment = $annotation->sentiment();

echo 'Text: ' . $text . '
Sentiment: ' . $sentiment['score'] . ', ' . $sentiment['magnitude'];

