<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Attribute;

/**
 * String format trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringFormatTrait {

    /**
     * Format.
     *
     * @var string
     */
    private $format;

    /**
     * Get the format.
     *
     * @return string Returns the format.
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Set the format.
     *
     * @param string $format The format.
     */
    public function setFormat($format) {
        $this->format = $format;
        return $this;
    }
}