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

/**
 * Liste départements request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Departement
 */
class ListeDepartementsRequest {

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/regions/%d/departements";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath() {
        return self::RESOURCE_PATH;
    }
}