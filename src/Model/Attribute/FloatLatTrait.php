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
 * Float latitude trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait FloatLatTrait {

    /**
     * Latitude.
     *
     * @var float|null
     */
    private $lat;

    /**
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLat(): ?float {
        return $this->lat;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $lat The latitude.
     */
    public function setLat(?float $lat): self {
        $this->lat = $lat;
        return $this;
    }
}