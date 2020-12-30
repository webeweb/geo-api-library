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

use WBW\Library\GeoAPI\Model\Attribute\FloatScoreTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringCodeTrait;
use WBW\Library\GeoAPI\Model\Attribute\StringNomTrait;

/**
 * Région.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model
 */
class Region {

    use FloatScoreTrait;
    use StringCodeTrait;
    use StringNomTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO TO
    }
}