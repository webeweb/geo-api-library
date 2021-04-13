<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Fixtures\Request\Adresse;

use WBW\Library\GeoAPI\Request\Adresse\AbstractCsvRequest;

/**
 * Test CSV request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Fixtures\Request\Adresse
 */
class TestCsvRequest extends AbstractCsvRequest {

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return "";
    }
}