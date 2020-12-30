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
 * String data trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringDataTrait {

    /**
     * Data.
     *
     * @var string|null
     */
    private $data;

    /**
     * Get the data.
     *
     * @return string|null Returns the data.
     */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * Set the data.
     *
     * @param string|null $data The data.
     */
    public function setData(?string $data): self {
        $this->data = $data;
        return $this;
    }
}