<?php

require './vendor/autoload.php';

// Run php test.php

// Returns 1
$guzzle = class_exists('Guzzle\Http\Client') ? 1 : 0;
echo $guzzle;
echo PHP_EOL;

// Returns 1
$phpCsFixer = class_exists('PhpCsFixer\Config') ? 1 : 0;
echo $phpCsFixer;
echo PHP_EOL;

// Return 0
$docusign1 = class_exists('DocuSign\eSign\Api\AccountsApi\CreateAccountSignaturesOptions') ? 1 : 0;
echo $docusign1;
echo PHP_EOL;

// Returns 0
// Rename /src/Api/EnvelopesApi/GetEnvelopeOptionsTest.php to src/Api/EnvelopesApi/GetEnvelopeOptions.php and this will return 1
$docusign2 = class_exists('DocuSign\eSign\Api\EnvelopesApi\GetEnvelopeOptions') ? 1 : 0;
echo $docusign2;
echo PHP_EOL;