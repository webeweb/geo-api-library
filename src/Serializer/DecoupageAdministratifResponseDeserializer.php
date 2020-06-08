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
use WBW\Library\GeoAPI\Model\Response\CommunesResponse;
use WBW\Library\GeoAPI\Model\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Model\Response\RegionsResponse;

/**
 * Découpage administratif response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class DecoupageAdministratifResponseDeserializer {

    /**
     * Deserializes a commune.
     *
     * @param array $response The response.
     * @return Commune Returns the commune.
     */
    protected static function deserializeCommune(array $response) {

        $model = new Commune();
        $model->setNom(ArrayHelper::get($response, "nom"));
        $model->setCode(ArrayHelper::get($response, "code"));
        $model->setCodeDepartement(ArrayHelper::get($response, "codeDepartement"));
        $model->setCodeRegion(ArrayHelper::get($response, "codeRegion"));
        $model->setCodesPostaux(ArrayHelper::get($response, "codesPostaux", []));
        $model->setPopulation(ArrayHelper::get($response, "population"));
        $model->setScore(ArrayHelper::get($response, "_score"));

        return $model;
    }

    /**
     * Deserializes a communes response.
     *
     * @param string $rawResponse The raw response.
     * @return CommunesResponse Returns the communes response.
     */
    public static function deserializeCommunesResponse($rawResponse) {

        $model = new CommunesResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        foreach ($response as $current) {
            $model->addCommune(static::deserializeCommune($current));
        }

        return $model;
    }

    /**
     * Deserializes a département.
     *
     * @param array $response The response.
     * @return Departement Returns the département.
     */
    protected static function deserializeDepartement(array $response) {

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
    public static function deserializeDepartementsResponse($rawResponse) {

        $model = new DepartementsResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        foreach ($response as $current) {
            $model->addDepartement(static::deserializeDepartement($current));
        }

        return $model;
    }

    /**
     * Deserializes a région.
     *
     * @param array $response The response.
     * @return Region Returns the région.
     */
    protected static function deserializeRegion(array $response) {

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
    public static function deserializeRegionsResponse($rawResponse) {

        $model = new RegionsResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        foreach ($response as $current) {
            $model->addRegion(static::deserializeRegion($current));
        }

        return $model;
    }
}