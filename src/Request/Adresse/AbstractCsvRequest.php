<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Request\Adresse;

use WBW\Library\GeoAPI\Request\AbstractRequest;
use WBW\Library\Traits\Strings\StringDataTrait;

/**
 * Abstract CSV request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Request\Adresse
 * @abstract
 */
abstract class AbstractCsvRequest extends AbstractRequest {

    use StringDataTrait;

    /**
     * Constructor.
     *
     * @param string|null $data The data.
     */
    public function __construct(string $data = null) {
        parent::__construct();

        $this->setData($data);
    }
}