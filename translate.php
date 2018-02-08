<?php

include_once "vendor/autoload.php";

use Gettext\Translations;

$sourceFile = 'example_en.po';
$outputFile = 'example_output_fr.po';
$translationPrefix = 'FR';

if (!is_file($sourceFile)) {
	exit(sprintf('Input source file %s does not exist', $sourceFile) . PHP_EOL);
}

//import from the source .po file:
$translations = Translations::fromPoFile($sourceFile);

foreach($translations as $key => $value) {
	$value->setTranslation(sprintf('[%s] %s', $translationPrefix, $value->getOriginal()));
}

// output the PO File
$translations->toPoFile(sprintf('translations/%s', $outputFile));

fwrite(STDOUT, sprintf("Translations from input file %s saved to translations/%s", $sourceFile, $outputFile) . PHP_EOL); 
