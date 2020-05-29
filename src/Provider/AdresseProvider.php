<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Provider;

use WBW\Library\Core\Exception\ApiException;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Serializer\AdresseJsonDeserializer;
use WBW\Library\GeoAPI\Serializer\AdresseRequestSerializer;
use WBW\Library\GeoJSON\Model\FeatureCollection;

/**
 * Adresse provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 */
class AdresseProvider extends AbstractProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api-adresse.data.gouv.fr";

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath() {
        return self::ENDPOINT_PATH;
    }

    /**
     * Reverse.
     *
     * @param ReverseRequest $request The reverse request.
     */
    public function reverse(ReverseRequest $request) {

        $queryData = AdresseRequestSerializer::serializeReverseRequest($request);

        $rawResponse = $this->callApi($request, $queryData);
        $decodedData = json_decode($rawResponse, true);

        return AdresseJsonDeserializer::deserializeFeatureCollection($decodedData);
    }

    /**
     * Reverse CSV.
     */
    public function reverseCsv() {

    }

    /**
     * Search.
     *
     * @param SearchRequest $request The search request.
     * @return FeatureCollection Returns the feature collection.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function search(SearchRequest $request) {

        $queryData = AdresseRequestSerializer::serializeSearchRequest($request);

        $rawResponse = $this->callApi($request, $queryData);
        $decodedData = json_decode($rawResponse, true);

        return AdresseJsonDeserializer::deserializeFeatureCollection($decodedData);
    }

    /**
     * Search CSV.
     */
    public function searchCsv() {

    }
}