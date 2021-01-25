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
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\GeoAPI\Model\Request\Departement\CommunesRequest;
use WBW\Library\GeoAPI\Model\Request\Departement\DepartementsRequest;
use WBW\Library\GeoAPI\Model\Response\CommunesResponse;
use WBW\Library\GeoAPI\Model\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Serializer\DecoupageAdministratifResponseDeserializer;

/**
 * Département provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 */
class DepartementProvider extends DecoupageAdministratifProvider {

    /**
     * Communes.
     *
     * @param CommunesRequest $request The communes request.
     * @return CommunesResponse Returns the communes response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function communes(CommunesRequest $request): CommunesResponse {

        $rawResponse = $this->callApi($request, []);

        return DecoupageAdministratifResponseDeserializer::deserializeCommunesResponse($rawResponse);
    }

    /**
     * Départements.
     *
     * @param DepartementsRequest $request The départements request.
     * @return DepartementsResponse Returns the départements response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function departements(DepartementsRequest $request): DepartementsResponse {

        $rawResponse = $this->callApi($request, []);

        return DecoupageAdministratifResponseDeserializer::deserializeDepartementsResponse($rawResponse);
    }
}