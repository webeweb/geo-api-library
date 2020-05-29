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
 * Float longitude trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait FloatLonTrait {

    /**
     * Longitude.
     *
     * @var float
     */
    private $lon;

    /**
     * Get the longitude.
     *
     * @return float Returns the longitude.
     */
    public function getLon() {
        return $this->lon;
    }

    /**
     * Set the longitude.
     *
     * @param float $lon The longitude.
     */
    public function setLon($lon) {
        $this->lon = $lon;
        return $this;
    }
}