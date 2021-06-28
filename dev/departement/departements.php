<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . "/../../vendor/autoload.php";

use WBW\Library\GeoAPI\Provider\DepartementProvider;
use WBW\Library\GeoAPI\Request\Departement\DepartementsRequest;

// Create the API provider.
$provider = new DepartementProvider();

// Create a Départements request.
$request = new DepartementsRequest();

// Call the API and get the response.
$response = $provider->departements($request);

// Handle the response.
foreach ($response->getDepartements() as $current) {

    echo "Nom: " . $current->getNom() . "\n";
    echo "Code: " . $current->getCode() . "\n";
    echo "CodeRegion: " . $current->getCodeRegion() . "\n";
    echo "Score: " . $current->getScore() . "\n\n";
}
