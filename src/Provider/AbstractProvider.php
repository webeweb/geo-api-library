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
use RuntimeException;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Provider\AbstractProvider as BaseProvider;

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
     * @param string $resourcePath The resource path.
     * @return string Returns the raw response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApi($resourcePath) {

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $method = "GET";
            $uri    = substr($resourcePath, 1);

            $this->logInfo(sprintf("Call API provider %s %s", $method, $uri), ["config" => $config]);

            $response = $client->request($method, $uri);

            return $response->getBody()->getContents();
        } catch (Exception $ex) {

            throw new RuntimeException(sprintf("Call API provider failed"), 500, $ex);
        }
    }

    /**
     * Get the endpoint path.
     *
     * @return string Returns the endpoint path.
     */
    abstract public function getEndpointPath();
}