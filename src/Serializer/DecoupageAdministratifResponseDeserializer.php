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

use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\GeoAPI\Model\Commune;
use WBW\Library\GeoAPI\Model\Departement;
use WBW\Library\GeoAPI\Model\Region;
use WBW\Library\GeoAPI\Response\CommunesResponse;
use WBW\Library\GeoAPI\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Response\RegionsResponse;
use WBW\Library\GeoJSON\Serializer\JsonDeserializer;

/**
 * Découpage administratif response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class DecoupageAdministratifResponseDeserializer extends JsonDeserializer {

    /**
     * Deserializes a commune.
     *
     * @param array $response The response.
     * @return Commune Returns the commune.
     */
    protected static function deserializeCommune(array $response): Commune {

        $model = new Commune();
        $model->setNom(ArrayHelper::get($response, "nom"));
        $model->setCode(ArrayHelper::get($response, "code"));
        $model->setCodeDepartement(ArrayHelper::get($response, "codeDepartement"));
        $model->setCodeRegion(ArrayHelper::get($response, "codeRegion"));
        $model->setCentre(static::deserializeGeometry(ArrayHelper::get($response, "centre", [])));
        $model->setContour(static::deserializeGeometry(ArrayHelper::get($response, "contour", [])));
        $model->setSurface(ArrayHelper::get($response, "surface"));
        $model->setPopulation(ArrayHelper::get($response, "population"));
        $model->setCodesPostaux(ArrayHelper::get($response, "codesPostaux", []));
        $model->setScore(ArrayHelper::get($response, "_score"));
        $model->setDepartement(static::deserializeDepartement(ArrayHelper::get($response, "departement", [])));
        $model->setRegion(static::deserializeRegion(ArrayHelper::get($response, "region", [])));

        return $model;
    }

    /**
     * Deserializes a communes response.
     *
     * @param string $rawResponse The raw response.
     * @return CommunesResponse Returns the communes response.
     */
    public static function deserializeCommunesResponse(string $rawResponse): CommunesResponse {

        $model = new CommunesResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        $response = static::toArray($response);
        foreach ($response as $current) {
            $model->addCommune(static::deserializeCommune($current));
        }

        return $model;
    }

    /**
     * Deserializes a département.
     *
     * @param array $response The response.
     * @return Departement|null Returns the département.
     */
    protected static function deserializeDepartement(array $response): ?Departement {

        if (0 === count($response)) {
            return null;
        }

        $model = new Departement();
        $model->setNom(ArrayHelper::get($response, "nom"));
        $model->setCode(ArrayHelper::get($response, "code"));
        $model->setCodeRegion(ArrayHelper::get($response, "codeRegion"));
        $model->setScore(ArrayHelper::get($response, "_score"));

        return $model;
    }

    /**
     * Deserializes a départements response.
     *
     * @param string $rawResponse The raw response.
     * @return DepartementsResponse Returns the départements response.
     */
    public static function deserializeDepartementsResponse(string $rawResponse): DepartementsResponse {

        $model = new DepartementsResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        $response = static::toArray($response);
        foreach ($response as $current) {
            $model->addDepartement(static::deserializeDepartement($current));
        }

        return $model;
    }

    /**
     * Deserializes a région.
     *
     * @param array $response The response.
     * @return Region|null Returns the région.
     */
    protected static function deserializeRegion(array $response): ?Region {

        if (0 === count($response)) {
            return null;
        }

        $model = new Region();
        $model->setCode(ArrayHelper::get($response, "code"));
        $model->setNom(ArrayHelper::get($response, "nom"));
        $model->setScore(ArrayHelper::get($response, "_score"));

        return $model;
    }

    /**
     * Deserializes a régions response.
     *
     * @param string $rawResponse The raw response.
     * @return RegionsResponse Returns the régions response.
     */
    public static function deserializeRegionsResponse(string $rawResponse): RegionsResponse {

        $model = new RegionsResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        $response = static::toArray($response);
        foreach ($response as $current) {
            $model->addRegion(static::deserializeRegion($current));
        }

        return $model;
    }

    /**
     * Convert an object into an array of object.
     *
     * @param array $response The response.
     * @return array Returns the converted array.
     */
    protected static function toArray(array $response): array {
        if (true === ArrayHelper::isObject($response)) {
            return [$response];
        }
        return $response;
    }
}