<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Serializer;

use WBW\Library\GeoAPI\Model\Adresse;
use WBW\Library\GeoAPI\Model\Response\AbstractCsvResponse;
use WBW\Library\GeoAPI\Model\Response\ReverseCsvResponse;
use WBW\Library\GeoAPI\Model\Response\SearchCsvResponse;
use WBW\Library\GeoJSON\Model\FeatureCollection;
use WBW\Library\GeoJSON\Serializer\JsonDeserializer;

/**
 * Adresse response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class AdresseResponseDeserializer {

    /**
     * Deserialize an adresse.
     *
     * @param string $response The response.
     * @param string[] $headers The headers.
     * @retun Adresse Returns the adresse.
     */
    protected static function deserializeAdresse($response, array $headers) {

        $model = new Adresse();

        $columns = str_getcsv($response);
        $methods = static::getMethods();

        for ($i = count($columns) - 1; 0 <= $i; --$i) {

            if (false === array_key_exists($headers[$i], $methods)) {
                continue;
            }

            $fct = $methods[$headers[$i]];

            $model->$fct($columns[$i]);
        }

        return $model;
    }

    /**
     * Deserialize a CSV response.
     *
     * @param string $rawResponse The raw response.
     * @param AbstractCsvResponse $model The CSV response.
     * @return AbstractCsvResponse Returns the CSV response.
     */
    protected static function deserializeCsvResponse($rawResponse, AbstractCsvResponse $model) {

        $lines = explode("\n", $rawResponse);

        $count = count($lines);
        if ($count <= 1) {
            return $model;
        }

        $headers = explode(",", $lines[0]);

        for ($i = 1; $i < $count; ++$i) {

            $current = $lines[$i];
            if ("" === $current) {
                continue;
            }

            $model->addAdresse(static::deserializeAdresse($current, $headers));
        }

        return $model;
    }

    /**
     * Deserialize a reverse CSV response.
     *
     * @param string $rawResponse The raw response.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     */
    public static function deserializeReverseCsvResponse($rawResponse) {
        return static::deserializeCsvResponse($rawResponse, new ReverseCsvResponse());
    }

    /**
     * Deserialize a reverse response.
     *
     * @param string $rawResponse The raw response.
     * @return FeatureCollection|null Returns the reverse response in case of success, null otherwise.
     */
    public static function deserializeReverseResponse($rawResponse) {
        return static::deserializeSearchResponse($rawResponse);
    }

    /**
     * Deserialize a search CSV response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchCsvResponse Returns the search CSV response.
     */
    public static function deserializeSearchCsvResponse($rawResponse) {
        return static::deserializeCsvResponse($rawResponse, new SearchCsvResponse());
    }

    /**
     * Deserialize a search response.
     *
     * @param string $rawResponse The raw response.
     * @return FeatureCollection|null Returns the search response in case of success, null otherwise.
     */
    public static function deserializeSearchResponse($rawResponse) {

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return null;
        }

        return JsonDeserializer::deserializeFeatureCollection($response);
    }

    /**
     * Get the methods.
     *
     * @return string[] Returns the methods.
     */
    protected static function getMethods() {
        return [
            "result_city"        => "setCity",
            "result_citycode"    => "setCityCode",
            "result_context"     => "setContext",
            "result_distance"    => "setDistance",
            "result_district"    => "setDistrict",
            "result_housenumber" => "setHouseNumber",
            "result_id"          => "setId",
            "result_label"       => "setLabel",
            "result_latitude"    => "setLatitude",
            "result_longitude"   => "setLongitude",
            "result_name"        => "setName",
            "result_oldcity"     => "setOldCity",
            "result_oldcitycode" => "setOldCityCode",
            "result_postcode"    => "setPostcode",
            "result_score"      => "setScore",
            "result_street"      => "setStreet",
            "result_type"        => "setType",
        ];
    }
}