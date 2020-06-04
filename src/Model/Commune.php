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

use WBW\Library\GeoAPI\Model\Attribute\FloatScoreTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringCodeRegionTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringCodeTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringNomTrait;

/**
 * Commune.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model
 */
class Commune {

    use FloatScoreTrait;
    use StringCodeRegionTrait;
    use StringCodeTrait;
    use StringNomTrait;

    /**
     * Population.
     *
     * @var int
     */
    private $population;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO TO.
    }

    /**
     * Get the population.
     *
     * @return int Returns the population.
     */
    public function getPopulation() {
        return $this->population;
    }

    /**
     * Set the population.
     *
     * @param int $population The population.
     * @return Commune Returns this commune.
     */
    public function setPopulation($population) {
        $this->population = $population;
        return $this;
    }
}