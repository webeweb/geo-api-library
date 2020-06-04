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
use WBW\Library\GeoAPI\Model\Region;
use WBW\Library\GeoAPI\Model\Response\Region\ListeRegionsResponse;

/**
 * Région response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class RegionResponseDeserializer {

    /**
     * Deserializes a liste régions response.
     *
     * @param string $rawResponse The raw response.
     * @return ListeRegionsResponse Returns the liste régions response.
     */
    public static function deserializeListeRegionsResponse($rawResponse) {

        $model = new ListeRegionsResponse();
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

    /**
     * Deserializes a région.
     *
     * @param array $response The response.
     * @return Region Returns the région.
     */
    public static function deserializeRegion(array $response) {

        $model = new Region();
        $model->setCode(ArrayHelper::get($response, "code"));
        $model->setNom(ArrayHelper::get($response, "nom"));
        $model->setScore(ArrayHelper::get($response, "_score"));

        return $model;
    }
}