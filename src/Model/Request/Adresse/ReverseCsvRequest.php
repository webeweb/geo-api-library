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

/**
 * Reverse CSV request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Adresse
 */
class ReverseCsvRequest extends AbstractCsvRequest {

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/reverse/csv/";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}