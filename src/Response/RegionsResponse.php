<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Response;

use WBW\Library\GeoAPI\Model\Region;

/**
 * Régions response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Response
 */
class RegionsResponse extends AbstractResponse {

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
     * @return RegionsResponse Returns this liste région response.
     */
    public function addRegion(Region $region): RegionsResponse {
        $this->regions[] = $region;
        return $this;
    }

    /**
     * Get the régions.
     *
     * @return Region[] Returns the régions.
     */
    public function getRegions(): array {
        return $this->regions;
    }

    /**
     * Set the régions.
     *
     * @param Region[] $regions The régions.
     * @return RegionsResponse Returns this régions response.
     */
    protected function setRegions(array $regions): RegionsResponse {
        $this->regions = $regions;
        return $this;
    }
}