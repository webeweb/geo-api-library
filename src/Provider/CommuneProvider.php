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
use WBW\Library\GeoAPI\Request\Commune\CommunesRequest;
use WBW\Library\GeoAPI\Response\CommunesResponse;
use WBW\Library\GeoAPI\Serializer\DecoupageAdministratifResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * Commune provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 */
class CommuneProvider extends DecoupageAdministratifProvider {

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
}