<?php
// Include the Dwolla REST Client
require 'dwolla.php';

// Include any required keys
require 'keys.php';

// Instantiate a new Dwolla REST Client
$Dwolla = new DwollaRestClient($apiKey, $apiSecret);

// Seed a previously generated access token
$Dwolla->setToken($token);
$Dwolla->setDebug(true);

$me = $Dwolla->me();
if(!$me) { echo "Error: {$Dwolla->getError()} \n"; } // Check for errors
else { print_r($me); } // Print user information

$balance = $Dwolla->balance();
if(!$balance) { echo "Error: {$Dwolla->getError()} \n"; } // Check for errors
else { echo $balance; } // Print user's balance




