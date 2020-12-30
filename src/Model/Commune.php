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
use WBW\Library\GeoAPI\Model\Attribute\StringCodeDepartementTrait;
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
    use StringCodeDepartementTrait;
    use StringCodeRegionTrait;
    use StringCodeTrait;
    use StringNomTrait;

    /**
     * Codes postaux.
     *
     * @var string[]
     */
    private $codesPostaux;

    /**
     * Population.
     *
     * @var int|null
     */
    private $population;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO TO
    }

    /**
     * Get the codes postaux.
     *
     * @return string[] Returns the codes postaux.
     */
    public function getCodesPostaux(): ?array {
        return $this->codesPostaux;
    }

    /**
     * Get the population.
     *
     * @return int|null Returns the population.
     */
    public function getPopulation(): ?int {
        return $this->population;
    }

    /**
     * Set the codes postaux.
     *
     * @param string[] $codesPostaux The codes postaux.
     * @return Commune Returns this commune.
     */
    public function setCodesPostaux(array $codesPostaux): Commune {
        $this->codesPostaux = $codesPostaux;
        return $this;
    }

    /**
     * Set the population.
     *
     * @param int|null $population The population.
     * @return Commune Returns this commune.
     */
    public function setPopulation(?int $population): Commune {
        $this->population = $population;
        return $this;
    }
}