<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Request\Commune;

use WBW\Library\GeoAPI\Model\AbstractRequest;
use WBW\Library\GeoAPI\Model\Attribute\StringFormatTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringGeometryTrait;

/**
 * Communes request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Commune
 */
class CommunesRequest extends AbstractRequest {

    use StringFormatTrait;
    use StringGeometryTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/communes";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath() {
        return self::RESOURCE_PATH;
    }
}