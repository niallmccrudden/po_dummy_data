## Create Dummy Data for PO Translations

### Instructions

Clone Repo and install composer (if not already installed)

composer update

To run -> php translate.php

By default the script looks for "example_en.po" in root and saves to "translations/example_output_fr.po"

Tweak variables in translate.php for desired effect 
    $sourceFile = 'example_en.po';
    $outputFile = 'example_output_fr.po';
    $translationPrefix = 'FR';