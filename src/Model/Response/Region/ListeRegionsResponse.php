<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Response\Region;

use WBW\Library\GeoAPI\Model\AbstractResponse;
use WBW\Library\GeoAPI\Model\Region;

/**
 * Liste régions response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Response\Region
 */
class ListeRegionsResponse extends AbstractResponse {

    /**
     * Régions.
     *
     * @var Region[]
     */
    private $regions;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRegions([]);
    }

    /**
     * Add a région.
     *
     * @param Region $region The région.
     * @return ListeRegionsResponse Returns this liste région response.
     */
    public function addRegion(Region $region) {
        $this->regions[] = $region;
        return $this;
    }

    /**
     * Get the régions.
     *
     * @return Region[] Returns the régions.
     */
    public function getRegions() {
        return $this->regions;
    }

    /**
     * Set the régions.
     *
     * @param Region[] $regions The régions.
     * @return ListeRegionsResponse Returns this liste régions response.
     */
    protected function setRegions(array $regions) {
        $this->regions = $regions;
        return $this;
    }
}