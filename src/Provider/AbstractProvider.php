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

use Exception;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Provider\AbstractProvider as BaseProvider;
use WBW\Library\GeoAPI\Model\AbstractRequest;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger The logger.
     */
    public function __construct(LoggerInterface $logger) {
        parent::__construct($logger);
        $this->setDebug(false);
    }

    /**
     * Build the configuration.
     *
     * @return array Returns the configuration.
     */
    private function buildConfiguration() {
        return [
            "base_uri"    => $this->getEndpointPath() . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "User-Agent" => "webeweb/geo-api-library",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @param array $postData The post data.
     * @return string Returns the raw response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData, array $postData = []) {

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $method  = 0 === count($postData) ? "GET" : "POST";
            $uri     = substr($request->getResourcePath(), 1);
            $options = [
                "query"     => $queryData,
                "multipart" => $postData,
            ];

            $this->logInfo(sprintf("Call API provider %s %s", $method, $uri), ["config" => $config]);

            $response = $client->request($method, $uri, $options);

            return $response->getBody()->getContents();
        } catch (Exception $ex) {

            throw new ApiException(sprintf("Call API provider failed"), 500, $ex);
        }
    }

    /**
     * Get the endpoint path.
     *
     * @return string Returns the endpoint path.
     */
    abstract public function getEndpointPath();
}