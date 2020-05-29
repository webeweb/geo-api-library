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
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Model\Response\ReverseCsvResponse;
use WBW\Library\GeoAPI\Model\Response\SearchCsvResponse;
use WBW\Library\GeoAPI\Serializer\AdresseRequestSerializer;
use WBW\Library\GeoAPI\Serializer\AdresseResponseDeserializer;
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
     * @return FeatureCollection|null Returns the reverse response in case of success, null otherwise.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverse(ReverseRequest $request) {

        $queryData = AdresseRequestSerializer::serializeReverseRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return AdresseResponseDeserializer::deserializeReverseResponse($rawResponse);
    }

    /**
     * Reverse CSV.
     *
     * @param ReverseCsvRequest $request The reverse CSV request.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverseCsv(ReverseCsvRequest $request) {

        $queryData = AdresseRequestSerializer::serializeReverseCsvRequest($request);

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];

        $rawResponse = $this->callApi($request, [], $postData);

        return AdresseResponseDeserializer::deserializeReverseCsvResponse($rawResponse);
    }

    /**
     * Search.
     *
     * @param SearchRequest $request The search request.
     * @return FeatureCollection|null Returns the search response in case of success, null otherwise.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function search(SearchRequest $request) {

        $queryData = AdresseRequestSerializer::serializeSearchRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return AdresseResponseDeserializer::deserializeSearchResponse($rawResponse);
    }

    /**
     * Search CSV.
     *
     * @param SearchCsvRequest $request The search CSV request.
     * @return SearchCsvResponse Returns the search CSV response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchCsv(SearchCsvRequest $request) {

        $queryData = AdresseRequestSerializer::serializeSearchCsvRequest($request);

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];

        $rawResponse = $this->callApi($request, [], $postData);

        return AdresseResponseDeserializer::deserializeSearchCsvResponse($rawResponse);
    }
}