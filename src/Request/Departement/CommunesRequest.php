<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Request\Departement;

use WBW\Library\GeoAPI\Model\Attribute\StringFormatTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringGeometryTrait;
use WBW\Library\GeoAPI\Request\AbstractRequest;

/**
 * Communes request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Request\Departement
 */
class CommunesRequest extends AbstractRequest {

    use StringFormatTrait;
    use StringGeometryTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/departements/%s/communes";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        if (null !== $this->getCode()) {
            return sprintf(self::RESOURCE_PATH, $this->getCode());
        }
        return self::RESOURCE_PATH;
    }
}