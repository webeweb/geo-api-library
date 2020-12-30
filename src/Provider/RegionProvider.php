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
use WBW\Library\GeoAPI\Model\Request\Region\CommunesRequest;
use WBW\Library\GeoAPI\Model\Request\Region\DepartementsRequest;
use WBW\Library\GeoAPI\Model\Request\Region\RegionsRequest;
use WBW\Library\GeoAPI\Model\Response\CommunesResponse;
use WBW\Library\GeoAPI\Model\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Model\Response\RegionsResponse;
use WBW\Library\GeoAPI\Serializer\DecoupageAdministratifResponseDeserializer;

/**
 * Région provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 */
class RegionProvider extends DecoupageAdministratifProvider {

    /**
     * Communes.
     *
     * @param CommunesRequest $request The communes request.
     * @return CommunesResponse Returns the communes response.
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
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function departements(DepartementsRequest $request): DepartementsResponse {

        $rawResponse = $this->callApi($request, []);

        return DecoupageAdministratifResponseDeserializer::deserializeDepartementsResponse($rawResponse);
    }

    /**
     * Régions.
     *
     * @param RegionsRequest $request The régions request.
     * @return RegionsResponse Returns the régions response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function regions(RegionsRequest $request): RegionsResponse {

        $rawResponse = $this->callApi($request, []);

        return DecoupageAdministratifResponseDeserializer::deserializeRegionsResponse($rawResponse);
    }
}