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
use WBW\Library\GeoAPI\Model\Attribute\FloatLatTrait;
use WBW\Library\GeoAPI\Model\Attribute\FloatLonTrait;

/**
 * Reverse request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Adresse
 */
class ReverseRequest extends AbstractRequest {

    use FloatLatTrait;
    use FloatLonTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/reverse/";

    /**
     * Constructor.
     *
     * @param float|null $lat The latitude.
     * @param float|null $lon The longitude.
     */
    public function __construct(float $lat = null, float $lon = null) {
        parent::__construct();
        $this->setLat($lat);
        $this->setLon($lon);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}