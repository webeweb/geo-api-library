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

use WBW\Library\GeoAPI\Provider\RegionProvider;
use WBW\Library\GeoAPI\Request\Region\RegionsRequest;

// Create the API provider.
$provider = new RegionProvider();

// Create a Regions request.
$request = new RegionsRequest();
$request->setCode("11");

// Call the API and get the response.
$response = $provider->regions($request);

// Handle the response.
foreach ($response->getRegions() as $current) {

    echo "Nom: " . $current->getNom() . "\n";
    echo "Code: " . $current->getCode() . "\n";
    echo "Score: " . $current->getScore() . "\n\n";
}
