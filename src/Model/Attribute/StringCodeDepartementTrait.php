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
 * String code département trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringCodeDepartementTrait {

    /**
     * Code département.
     *
     * @var string|null
     */
    private $codeDepartement;

    /**
     * Get the code département.
     *
     * @return string|null Returns the code département.
     */
    public function getCodeDepartement(): ?string {
        return $this->codeDepartement;
    }

    /**
     * Set the code département.
     *
     * @param string|null $codeDepartement The code département.
     * @return self Returns tis instance.
     */
    public function setCodeDepartement(?string $codeDepartement): self {
        $this->codeDepartement = $codeDepartement;
        return $this;
    }
}