<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model;

use WBW\Library\GeoAPI\Model\Attribute\ArrayFieldsTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringCodeTrait;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model
 * @abstract
 */
abstract class AbstractRequest {

    use ArrayFieldsTrait;
    use StringCodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setFields([]);
    }

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    abstract public function getResourcePath(): string;
}