<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Request\Departement;

use WBW\Library\GeoAPI\Model\AbstractRequest;

/**
 * Départements request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Departement
 */
class DepartementsRequest extends AbstractRequest {

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/departements";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}