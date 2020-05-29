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
use WBW\Library\Core\Argument\Helper\IntegerHelper;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;

/**
 * Adresse request serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class AdresseRequestSerializer {

    /**
     * Serialize a reverse request.
     *
     * @param ReverseRequest $request The reverse request.
     * @return array Returns the parameters.
     */
    public static function serializeReverseRequest(ReverseRequest $request) {

        $parameters = [];

        ArrayHelper::set($parameters, "lat", $request->getLat(), [null]);
        ArrayHelper::set($parameters, "lon", $request->getLon(), [null]);

        return $parameters;
    }

    /**
     * Serialize a search request.
     *
     * @param SearchRequest $request The search request.
     * @return array Returns the parameters.
     */
    public static function serializeSearchRequest(SearchRequest $request) {

        $parameters = [];

        ArrayHelper::set($parameters, "q", $request->getQ());
        ArrayHelper::set($parameters, "limit", $request->getLimit());
        ArrayHelper::set($parameters, "autocomplete", IntegerHelper::parseBoolean($request->getAutocomplete()), [1]);
        ArrayHelper::set($parameters, "lat", $request->getLat(), [null]);
        ArrayHelper::set($parameters, "lon", $request->getLon(), [null]);
        ArrayHelper::set($parameters, "postcode", $request->getPostcode(), [null]);
        ArrayHelper::set($parameters, "citycode", $request->getCityCode(), [null]);
        ArrayHelper::set($parameters, "type", $request->getType(), [null]);

        return $parameters;
    }
}