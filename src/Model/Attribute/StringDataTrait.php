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
     * @var string
     */
    private $data;

    /**
     * Get the data.
     *
     * @return string Returns the data.
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Set the data.
     *
     * @param string $data The data.
     */
    public function setData($data) {
        $this->data = $data;
        return $this;
    }
}