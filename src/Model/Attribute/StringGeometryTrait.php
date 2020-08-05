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
 * String geometry trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringGeometryTrait {

    /**
     * Geometry.
     *
     * @var string
     */
    private $geometry;

    /**
     * Get the geometry.
     *
     * @return string Returns the geometry.
     */
    public function getGeometry() {
        return $this->geometry;
    }

    /**
     * Set the geometry.
     *
     * @param string $geometry The geometry.
     */
    public function setGeometry($geometry) {
        $this->geometry = $geometry;
        return $this;
    }
}