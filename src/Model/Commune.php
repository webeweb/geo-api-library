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

use WBW\Library\GeoAPI\Model\Attribute\StringCodeDepartementTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringCodeRegionTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringNomTrait;
use WBW\Library\GeoJSON\Model\Geometry\Point;
use WBW\Library\GeoJSON\Model\Geometry\Polygon;
use WBW\Library\Traits\Floats\FloatScoreTrait;
use WBW\Library\Traits\Strings\StringCodeTrait;

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
     * Centre.
     *
     * @var Point|null
     */
    private $centre;

    /**
     * Codes postaux.
     *
     * @var string[]
     */
    private $codesPostaux;

    /**
     * Contour.
     *
     * @var Polygon|null
     */
    private $contour;

    /**
     * Département.
     *
     * @var Departement|null
     */
    private $departement;

    /**
     * Population.
     *
     * @var int|null
     */
    private $population;

    /**
     * Région.
     *
     * @var Region|null
     */
    private $region;

    /**
     * Surface.
     *
     * @var float|null
     */
    private $surface;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO TO
    }

    /**
     * Get the centre.
     *
     * @return Point|null Returns the centre.
     */
    public function getCentre(): ?Point {
        return $this->centre;
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
     * Get the contour.
     *
     * @return Polygon|null Returns the contour.
     */
    public function getContour(): ?Polygon {
        return $this->contour;
    }

    /**
     * Get the département.
     *
     * @return Departement|null The département.
     */
    public function getDepartement(): ?Departement {
        return $this->departement;
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
     * Get the région.
     *
     * @return Region|null Returns the région.
     */
    public function getRegion(): ?Region {
        return $this->region;
    }

    /**
     * Get the surface.
     *
     * @return float|null Returns the surface.
     */
    public function getSurface(): ?float {
        return $this->surface;
    }

    /**
     * Set the centre.
     *
     * @param Point|null $centre The centre.
     * @return Commune Returns this commune.
     */
    public function setCentre(?Point $centre): Commune {
        $this->centre = $centre;
        return $this;
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
     * Set the contour.
     *
     * @param Polygon|null $contour The contour.
     * @return Commune Returns this commune.
     */
    public function setContour(?Polygon $contour): Commune {
        $this->contour = $contour;
        return $this;
    }

    /**
     * Set the département.
     *
     * @param Departement|null $departement The département.
     * @return Commune Returns this commune.
     */
    public function setDepartement(?Departement $departement): Commune {
        $this->departement = $departement;
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

    /**
     * Set the région.
     *
     * @param Region|null $region The région.
     * @return Commune Returns this commune.
     */
    public function setRegion(?Region $region): Commune {
        $this->region = $region;
        return $this;
    }

    /**
     * Set the surface.
     *
     * @param float|null $surface The surface.
     * @return Commune Returns this commune.
     */
    public function setSurface(?float $surface): Commune {
        $this->surface = $surface;
        return $this;
    }
}