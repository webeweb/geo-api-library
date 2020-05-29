<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Request\Adresse;

use WBW\Library\GeoAPI\Model\AbstractRequest;
use WBW\Library\GeoAPI\Model\Attribute\StringDataTrait;

/**
 * Search CSV request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Adresse
 */
class SearchCsvRequest extends AbstractRequest {

    use StringDataTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/search/csv/";

    /**
     * Constructor.
     *
     * @param string $data The data.
     */
    public function __construct($data = null) {
        $this->setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath() {
        return self::RESOURCE_PATH;
    }
}