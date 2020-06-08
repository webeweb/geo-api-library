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
     * Code département.
     *
     * @var string
     */
    private $codeDepartement;

    /**
     * Codes postaux.
     *
     * @var string[]
     */
    private $codesPostaux;

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
     * Get the code département.
     *
     * @return string Returns the code département.
     */
    public function getCodeDepartement() {
        return $this->codeDepartement;
    }

    /**
     * Get the codes postaux.
     *
     * @return string[] Returns the codes postaux.
     */
    public function getCodesPostaux() {
        return $this->codesPostaux;
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
     * Set the code département.
     *
     * @param string $codeDepartement The code département.
     * @return Commune Returns this commune.
     */
    public function setCodeDepartement($codeDepartement) {
        $this->codeDepartement = $codeDepartement;
        return $this;
    }

    /**
     * Set the codes postaux.
     *
     * @param string[] $codesPostaux The codes postaux.
     * @return Commune Returns this commune.
     */
    public function setCodesPostaux($codesPostaux) {
        $this->codesPostaux = $codesPostaux;
        return $this;
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