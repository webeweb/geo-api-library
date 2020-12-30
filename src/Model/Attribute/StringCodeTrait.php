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
 * String code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait StringCodeTrait {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     */
    public function setCode(?string $code): self {
        $this->code = $code;
        return $this;
    }
}