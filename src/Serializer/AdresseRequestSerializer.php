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

use WBW\Library\GeoAPI\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Request\Adresse\SearchRequest;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\IntegerHelper;

/**
 * Adresse request serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Serializer
 */
class AdresseRequestSerializer {

    /**
     * Serialize a reverse CSV request.
     *
     * @param ReverseCsvRequest $request The reverse CSV request.
     * @return array Returns the serialized reverse CSV request.
     */
    public static function serializeReverseCsvRequest(ReverseCsvRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "data", $request->getData(), [null]);

        return $result;
    }

    /**
     * Serialize a reverse request.
     *
     * @param ReverseRequest $request The reverse request.
     * @return array Returns the serialized reverse request.
     */
    public static function serializeReverseRequest(ReverseRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "lat", $request->getLat(), [null]);
        ArrayHelper::set($result, "lon", $request->getLon(), [null]);

        return $result;
    }

    /**
     * Serialize a search CSV request.
     *
     * @param SearchCsvRequest $request The search CSV request.
     * @return array Returns the serialized search CSV request.
     */
    public static function serializeSearchCsvRequest(SearchCsvRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "data", $request->getData(), [null]);
        ArrayHelper::set($result, "columns", $request->getColumns(), [[]]);
        ArrayHelper::set($result, "result_columns", $request->getResultColumns(), [[]]);

        return $result;
    }

    /**
     * Serialize a search request.
     *
     * @param SearchRequest $request The search request.
     * @return array Returns the serialized search request.
     */
    public static function serializeSearchRequest(SearchRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "q", $request->getQ());
        ArrayHelper::set($result, "limit", $request->getLimit());
        ArrayHelper::set($result, "autocomplete", IntegerHelper::parseBoolean($request->getAutocomplete()), [1]);
        ArrayHelper::set($result, "lat", $request->getLat(), [null]);
        ArrayHelper::set($result, "lon", $request->getLon(), [null]);
        ArrayHelper::set($result, "postcode", $request->getPostcode(), [null]);
        ArrayHelper::set($result, "citycode", $request->getCityCode(), [null]);
        ArrayHelper::set($result, "type", $request->getType(), [null]);

        return $result;
    }
}