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

/**
 * Découpage administratif provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Provider
 * @abstract
 */
abstract class DecoupageAdministratifProvider extends AbstractProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://geo.api.gouv.fr";

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return self::ENDPOINT_PATH;
    }
}