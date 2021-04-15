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
use WBW\Library\GeoAPI\Request\Region\CommunesRequest;

// Create the API provider.
$provider = new RegionProvider();

// Create a Communes request.
$request = new CommunesRequest();
$request->setCode("11");

// Call the API and get teh response.
$response = $provider->communes($request);

// Handle the response.
foreach ($response->getCommunes() as $current) {

    echo "Nom: " . $current->getNom() . "\n";
    echo "Code: " . $current->getCode() . "\n";
    echo "CodeDepartement: " . $current->getCodeDepartement() . "\n";
    echo "CodeRegion: " . $current->getCodeRegion() . "\n";
    echo "Code postaux:\n";
    foreach($current->getCodesPostaux() as $cp) {
        echo "    " . $cp . "\n";
    }
    echo "Population: " . $current->getPopulation() . "\n";
    echo "Score: " . $current->getScore() . "\n\n";
}
