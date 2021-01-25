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

use GuzzleHttp\Exception\GuzzleException;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Model\Response\Adresse\ReverseCsvResponse;
use WBW\Library\GeoAPI\Model\Response\Adresse\SearchCsvResponse;
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
     * Add an array.
     *
     * @param array $post The POST.
     * @param string $name The name.
     * @param array $data The data.
     * @return void
     */
    protected function appendArray(array &$post, string $name, array $data): void {

        if (0 === count($data)) {
            return;
        }

        foreach ($data as $current) {
            $post[] = [
                "name"     => $name,
                "contents" => $current,
            ];
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return self::ENDPOINT_PATH;
    }

    /**
     * Reverse.
     *
     * @param ReverseRequest $request The reverse request.
     * @return FeatureCollection|null Returns the reverse response in case of success, null otherwise.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverse(ReverseRequest $request): ?FeatureCollection {

        $queryData = AdresseRequestSerializer::serializeReverseRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return AdresseResponseDeserializer::deserializeReverseResponse($rawResponse);
    }

    /**
     * Reverse CSV.
     *
     * @param ReverseCsvRequest $request The reverse CSV request.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverseCsv(ReverseCsvRequest $request): ReverseCsvResponse {

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
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function search(SearchRequest $request): FeatureCollection {

        $queryData = AdresseRequestSerializer::serializeSearchRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return AdresseResponseDeserializer::deserializeSearchResponse($rawResponse);
    }

    /**
     * Search CSV.
     *
     * @param SearchCsvRequest $request The search CSV request.
     * @return SearchCsvResponse Returns the search CSV response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchCsv(SearchCsvRequest $request): SearchCsvResponse {

        $queryData = AdresseRequestSerializer::serializeSearchCsvRequest($request);

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];
        $this->appendArray($postData, "columns", ArrayHelper::get($queryData, "columns", []));
        $this->appendArray($postData, "result_columns", ArrayHelper::get($queryData, "result_columns", []));

        $rawResponse = $this->callApi($request, [], $postData);

        return AdresseResponseDeserializer::deserializeSearchCsvResponse($rawResponse);
    }
}