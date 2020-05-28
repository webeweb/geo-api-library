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

use WBW\Library\GeoAPI\Serializer\AdresseJsonDeserializer;

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
     * Resource path "reverse".
     *
     * @var string
     */
    const RESOURCE_PATH_REVERSE = "/reverse/";

    /**
     * Resource path "reverse CSV".
     *
     * @var string
     */
    const RESOURCE_PATH_REVERSE_CSV = "/reverse/csv/";

    /**
     * Resource path "search".
     *
     * @var string
     */
    const RESOURCE_PATH_SEARCH = "/search/";

    /**
     * Resource path "search CSV".
     *
     * @var string
     */
    const RESOURCE_PATH_SEARCH_CSV = "/search/csv/";

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath() {
        return self::ENDPOINT_PATH;
    }

    /**
     * Reverse.
     */
    public function reverse() {

    }

    /**
     * Reverse CSV.
     */
    public function reverseCsv() {

    }

    /**
     * Search.
     */
    public function search($q) {

        $rawResponse = $this->callApi(self::RESOURCE_PATH_SEARCH . "?q={$q}");
        $decodedData = json_decode($rawResponse, true);

        return AdresseJsonDeserializer::deserializeFeatureCollection($decodedData);
    }

    /**
     * Search CSV.
     */
    public function searchCsv() {

    }
}