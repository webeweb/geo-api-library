<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Serializer;

use WBW\Library\GeoAPI\Response\Adresse\ReverseCsvResponse;
use WBW\Library\GeoAPI\Response\Adresse\SearchCsvResponse;
use WBW\Library\GeoAPI\Serializer\AdresseResponseDeserializer;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Adresse response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Serializer
 */
class AdresseResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeReverseCsvResponse() method.
     *
     * @return void
     */
    public function testDeserializeReverseCsvResponse(): void {

        // Set a filename mock.
        $filename = realpath(__DIR__ . "/../Fixtures/Response/Adresse/ReverseCsvResponse.csv");

        $res = AdresseResponseDeserializer::deserializeReverseCsvResponse(file_get_contents($filename));
        $this->assertInstanceOf(ReverseCsvResponse::class, $res);

        $this->assertCount(4, $res->getAdresses());

        $this->assertEquals("48.670333", $res->getAdresses()[0]->getColumns()["lat"]);
        $this->assertEquals("6.1468826", $res->getAdresses()[0]->getColumns()["lon"]);
        $this->assertEquals("École Claude Déruet", $res->getAdresses()[0]->getColumns()["name"]);
        $this->assertEquals("48.670297", $res->getAdresses()[0]->getLatitude());
        $this->assertEquals("6.14684", $res->getAdresses()[0]->getLongitude());
        $this->assertEquals("6 Rue Albert 1er 54600 Villers-lès-Nancy", $res->getAdresses()[0]->getLabel());
        $this->assertEquals("5", $res->getAdresses()[0]->getDistance());
        $this->assertEquals("housenumber", $res->getAdresses()[0]->getType());
        $this->assertEquals("54578_0040_00006", $res->getAdresses()[0]->getId());
        $this->assertEquals("6", $res->getAdresses()[0]->getHouseNumber());
        $this->assertEquals("Rue Albert 1er", $res->getAdresses()[0]->getName());
        $this->assertEquals("", $res->getAdresses()[0]->getStreet());
        $this->assertEquals("54600", $res->getAdresses()[0]->getPostcode());
        $this->assertEquals("Villers-lès-Nancy", $res->getAdresses()[0]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[0]->getContext());
        $this->assertEquals("54578", $res->getAdresses()[0]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[0]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[0]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[0]->getDistrict());
        $this->assertNull($res->getAdresses()[0]->getScore());

        $this->assertEquals("48.6495464", $res->getAdresses()[1]->getColumns()["lat"]);
        $this->assertEquals("6.1521676", $res->getAdresses()[1]->getColumns()["lon"]);
        $this->assertEquals("École Gilberte Monne", $res->getAdresses()[1]->getColumns()["name"]);
        $this->assertEquals("48.649015", $res->getAdresses()[1]->getLatitude());
        $this->assertEquals("6.151994", $res->getAdresses()[1]->getLongitude());
        $this->assertEquals("3 Rue du Morvan 54500 Vandœuvre-lès-Nancy", $res->getAdresses()[1]->getLabel());
        $this->assertEquals("60", $res->getAdresses()[1]->getDistance());
        $this->assertEquals("housenumber", $res->getAdresses()[1]->getType());
        $this->assertEquals("54547_0504_00003", $res->getAdresses()[1]->getId());
        $this->assertEquals("3", $res->getAdresses()[1]->getHouseNumber());
        $this->assertEquals("Rue du Morvan", $res->getAdresses()[1]->getName());
        $this->assertEquals("", $res->getAdresses()[1]->getStreet());
        $this->assertEquals("54500", $res->getAdresses()[1]->getPostcode());
        $this->assertEquals("Vandœuvre-lès-Nancy", $res->getAdresses()[1]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[1]->getContext());
        $this->assertEquals("54547", $res->getAdresses()[1]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[1]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[1]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[1]->getDistrict());
        $this->assertNull($res->getAdresses()[1]->getScore());

        $this->assertEquals("48.6470103", $res->getAdresses()[2]->getColumns()["lat"]);
        $this->assertEquals("6.2075765", $res->getAdresses()[2]->getColumns()["lon"]);
        $this->assertEquals("École maternelle Victor Hugo", $res->getAdresses()[2]->getColumns()["name"]);
        $this->assertEquals("48.646666", $res->getAdresses()[2]->getLatitude());
        $this->assertEquals("6.207778", $res->getAdresses()[2]->getLongitude());
        $this->assertEquals("30 Rue d'Arbois 54180 Heillecourt", $res->getAdresses()[2]->getLabel());
        $this->assertEquals("41", $res->getAdresses()[2]->getDistance());
        $this->assertEquals("housenumber", $res->getAdresses()[2]->getType());
        $this->assertEquals("54257_0008_00030", $res->getAdresses()[2]->getId());
        $this->assertEquals("30", $res->getAdresses()[2]->getHouseNumber());
        $this->assertEquals("Rue d'Arbois", $res->getAdresses()[2]->getName());
        $this->assertEquals("", $res->getAdresses()[2]->getStreet());
        $this->assertEquals("54180", $res->getAdresses()[2]->getPostcode());
        $this->assertEquals("Heillecourt", $res->getAdresses()[2]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[2]->getContext());
        $this->assertEquals("54257", $res->getAdresses()[2]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[2]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[2]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[2]->getDistrict());
        $this->assertNull($res->getAdresses()[2]->getScore());

        $this->assertEquals("48.7277223", $res->getAdresses()[3]->getColumns()["lat"]);
        $this->assertEquals("6.1578988", $res->getAdresses()[3]->getColumns()["lon"]);
        $this->assertEquals("École maternelle Buffon", $res->getAdresses()[3]->getColumns()["name"]);
        $this->assertEquals("48.727991", $res->getAdresses()[3]->getLatitude());
        $this->assertEquals("6.157347", $res->getAdresses()[3]->getLongitude());
        $this->assertEquals("2 Rue de la Papeterie 54250 Champigneulles", $res->getAdresses()[3]->getLabel());
        $this->assertEquals("50", $res->getAdresses()[3]->getDistance());
        $this->assertEquals("housenumber", $res->getAdresses()[3]->getType());
        $this->assertEquals("54115_0109_00002", $res->getAdresses()[3]->getId());
        $this->assertEquals("2", $res->getAdresses()[3]->getHouseNumber());
        $this->assertEquals("Rue de la Papeterie", $res->getAdresses()[3]->getName());
        $this->assertEquals("", $res->getAdresses()[3]->getStreet());
        $this->assertEquals("54250", $res->getAdresses()[3]->getPostcode());
        $this->assertEquals("Champigneulles", $res->getAdresses()[3]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[3]->getContext());
        $this->assertEquals("54115", $res->getAdresses()[3]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[3]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[3]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[3]->getDistrict());
        $this->assertNull($res->getAdresses()[3]->getScore());
    }

    /**
     * Tests the deserializeSearchCsvResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchCsvResponse(): void {

        // Set a filename mock.
        $filename = realpath(__DIR__ . "/../Fixtures/Response/Adresse/SearchCsvResponse.csv");

        $res = AdresseResponseDeserializer::deserializeSearchCsvResponse(file_get_contents($filename));
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertCount(4, $res->getAdresses());

        $this->assertEquals("École Claude Déruet", $res->getAdresses()[0]->getColumns()["nom"]);
        $this->assertEquals("6 Rue Albert 1er", $res->getAdresses()[0]->getColumns()["adresse"]);
        $this->assertEquals("54600", $res->getAdresses()[0]->getColumns()["postcode"]);
        $this->assertEquals("Villers-lès-Nancy", $res->getAdresses()[0]->getColumns()["city"]);
        $this->assertEquals("48.670297", $res->getAdresses()[0]->getColumns()["latitude"]);
        $this->assertEquals("6.14684", $res->getAdresses()[0]->getColumns()["longitude"]);
        $this->assertEquals("6 Rue Albert 1er 54600 Villers-lès-Nancy", $res->getAdresses()[0]->getLabel());
        $this->assertEquals("0.64", $res->getAdresses()[0]->getScore());
        $this->assertEquals("housenumber", $res->getAdresses()[0]->getType());
        $this->assertEquals("54578_0040_00006", $res->getAdresses()[0]->getId());
        $this->assertEquals("6", $res->getAdresses()[0]->getHouseNumber());
        $this->assertEquals("Rue Albert 1er", $res->getAdresses()[0]->getName());
        $this->assertEquals("", $res->getAdresses()[0]->getStreet());
        $this->assertEquals("54600", $res->getAdresses()[0]->getPostcode());
        $this->assertEquals("Villers-lès-Nancy", $res->getAdresses()[0]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[0]->getContext());
        $this->assertEquals("54578", $res->getAdresses()[0]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[0]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[0]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[0]->getDistrict());
        $this->assertNull($res->getAdresses()[0]->getDistance());
        $this->assertNull($res->getAdresses()[0]->getLatitude());
        $this->assertNull($res->getAdresses()[0]->getLongitude());

        $this->assertEquals("École Gilberte Monne", $res->getAdresses()[1]->getColumns()["nom"]);
        $this->assertEquals("6 Rue d'Aquitaine", $res->getAdresses()[1]->getColumns()["adresse"]);
        $this->assertEquals("54500", $res->getAdresses()[1]->getColumns()["postcode"]);
        $this->assertEquals("Vandœuvre-lès-Nancy", $res->getAdresses()[1]->getColumns()["city"]);
        $this->assertEquals("48.650077", $res->getAdresses()[1]->getColumns()["latitude"]);
        $this->assertEquals("6.153462", $res->getAdresses()[1]->getColumns()["longitude"]);
        $this->assertEquals("6 Rue d'Aquitaine 54500 Vandœuvre-lès-Nancy", $res->getAdresses()[1]->getLabel());
        $this->assertEquals("0.66", $res->getAdresses()[1]->getScore());
        $this->assertEquals("housenumber", $res->getAdresses()[1]->getType());
        $this->assertEquals("54547_0058_00006", $res->getAdresses()[1]->getId());
        $this->assertEquals("6", $res->getAdresses()[1]->getHouseNumber());
        $this->assertEquals("Rue d'Aquitaine", $res->getAdresses()[1]->getName());
        $this->assertEquals("", $res->getAdresses()[1]->getStreet());
        $this->assertEquals("54500", $res->getAdresses()[1]->getPostcode());
        $this->assertEquals("Vandœuvre-lès-Nancy", $res->getAdresses()[1]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[1]->getContext());
        $this->assertEquals("54547", $res->getAdresses()[1]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[1]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[1]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[1]->getDistrict());
        $this->assertNull($res->getAdresses()[1]->getDistance());
        $this->assertNull($res->getAdresses()[1]->getLatitude());
        $this->assertNull($res->getAdresses()[1]->getLongitude());

        $this->assertEquals("École maternelle Victor Hugo", $res->getAdresses()[2]->getColumns()["nom"]);
        $this->assertEquals("31 Rue d'Arbois", $res->getAdresses()[2]->getColumns()["adresse"]);
        $this->assertEquals("54180", $res->getAdresses()[2]->getColumns()["postcode"]);
        $this->assertEquals("Heillecourt", $res->getAdresses()[2]->getColumns()["city"]);
        $this->assertEquals("48.646636", $res->getAdresses()[2]->getColumns()["latitude"]);
        $this->assertEquals("6.207628", $res->getAdresses()[2]->getColumns()["longitude"]);
        $this->assertEquals("31 Rue d'Arbois 54180 Heillecourt", $res->getAdresses()[2]->getLabel());
        $this->assertEquals("0.51", $res->getAdresses()[2]->getScore());
        $this->assertEquals("housenumber", $res->getAdresses()[2]->getType());
        $this->assertEquals("54257_0008_00031", $res->getAdresses()[2]->getId());
        $this->assertEquals("31", $res->getAdresses()[2]->getHouseNumber());
        $this->assertEquals("Rue d'Arbois", $res->getAdresses()[2]->getName());
        $this->assertEquals("", $res->getAdresses()[2]->getStreet());
        $this->assertEquals("54180", $res->getAdresses()[2]->getPostcode());
        $this->assertEquals("Heillecourt", $res->getAdresses()[2]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[2]->getContext());
        $this->assertEquals("54257", $res->getAdresses()[2]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[2]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[2]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[2]->getDistrict());
        $this->assertNull($res->getAdresses()[2]->getDistance());
        $this->assertNull($res->getAdresses()[2]->getLatitude());
        $this->assertNull($res->getAdresses()[2]->getLongitude());

        $this->assertEquals("École maternelle Buffon", $res->getAdresses()[3]->getColumns()["nom"]);
        $this->assertEquals("1 bis Rue de la Papeterie", $res->getAdresses()[3]->getColumns()["adresse"]);
        $this->assertEquals("54250", $res->getAdresses()[3]->getColumns()["postcode"]);
        $this->assertEquals("Champigneulles", $res->getAdresses()[3]->getColumns()["city"]);
        $this->assertEquals("48.727747", $res->getAdresses()[3]->getColumns()["latitude"]);
        $this->assertEquals("6.156822", $res->getAdresses()[3]->getColumns()["longitude"]);
        $this->assertEquals("1 bis Rue de la Papeterie 54250 Champigneulles", $res->getAdresses()[3]->getLabel());
        $this->assertEquals("0.63", $res->getAdresses()[3]->getScore());
        $this->assertEquals("housenumber", $res->getAdresses()[3]->getType());
        $this->assertEquals("54115_0109_00001_bis", $res->getAdresses()[3]->getId());
        $this->assertEquals("1 bis", $res->getAdresses()[3]->getHouseNumber());
        $this->assertEquals("Rue de la Papeterie", $res->getAdresses()[3]->getName());
        $this->assertEquals("", $res->getAdresses()[3]->getStreet());
        $this->assertEquals("54250", $res->getAdresses()[3]->getPostcode());
        $this->assertEquals("Champigneulles", $res->getAdresses()[3]->getCity());
        $this->assertEquals("54, Meurthe-et-Moselle, Grand Est", $res->getAdresses()[3]->getContext());
        $this->assertEquals("54115", $res->getAdresses()[3]->getCityCode());
        $this->assertEquals("", $res->getAdresses()[3]->getOldCityCode());
        $this->assertEquals("", $res->getAdresses()[3]->getOldCity());
        $this->assertEquals("", $res->getAdresses()[3]->getDistrict());
        $this->assertNull($res->getAdresses()[3]->getDistance());
        $this->assertNull($res->getAdresses()[3]->getLatitude());
        $this->assertNull($res->getAdresses()[3]->getLongitude());
    }

    /**
     * Tests the deserializeSearchCsvResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchCsvResponseWithBadResponse(): void {

        $res = AdresseResponseDeserializer::deserializeSearchCsvResponse("");
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertCount(0, $res->getAdresses());
    }

    /**
     * Tests the deserializeSearchCsvResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchResponseWithBadResponse(): void {

        $res = AdresseResponseDeserializer::deserializeSearchResponse("");
        $this->assertNull($res);
    }
}