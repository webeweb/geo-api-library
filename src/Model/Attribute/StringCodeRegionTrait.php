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
 * String code région trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringCodeRegionTrait {

    /**
     * Code région.
     *
     * @var string|null
     */
    private $codeRegion;

    /**
     * Get the code région.
     *
     * @return string|null Returns the code région.
     */
    public function getCodeRegion(): ?string {
        return $this->codeRegion;
    }

    /**
     * Set the code région.
     *
     * @param string|null $codeRegion The code région.
     */
    public function setCodeRegion(?string $codeRegion): self {
        $this->codeRegion = $codeRegion;
        return $this;
    }
}