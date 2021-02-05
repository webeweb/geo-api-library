<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Request\Region;

use WBW\Library\GeoAPI\Model\AbstractRequest;
use WBW\Library\GeoAPI\Model\Attribute\StringNomTrait;

/**
 * Régions request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Region
 */
class RegionsRequest extends AbstractRequest {

    use StringNomTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/regions";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return static::RESOURCE_PATH;
    }
}