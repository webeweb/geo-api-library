<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Response\Adresse;

use WBW\Library\GeoAPI\Model\AbstractResponse;
use WBW\Library\GeoAPI\Model\Adresse\Adresse;

/**
 * Abstract CVS response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Response\Adresse
 * @abstract
 */
abstract class AbstractCsvResponse extends AbstractResponse {

    /**
     * Result "city".
     *
     * @var string
     */
    const RESULT_CITY = "result_city";

    /**
     * Result "city code".
     *
     * @var string
     */
    const RESULT_CITYCODE = "result_citycode";

    /**
     * Result "context".
     *
     * @var string
     */
    const RESULT_CONTEXT = "result_context";

    /**
     * Result "distance".
     *
     * @var string
     */
    const RESULT_DISTANCE = "result_distance";

    /**
     * Result "district".
     *
     * @var string
     */
    const RESULT_DISTRICT = "result_district";

    /**
     * Result "house number".
     *
     * @var string
     */
    const RESULT_HOUSENUMBER = "result_housenumber";

    /**
     * Result "id".
     *
     * @var string
     */
    const RESULT_ID = "result_id";

    /**
     * Result "label".
     *
     * @var string
     */
    const RESULT_LABEL = "result_label";

    /**
     * Result "latitude".
     *
     * @var string
     */
    const RESULT_LATITUDE = "result_latitude";

    /**
     * Result "longitude".
     *
     * @var string
     */
    const RESULT_LONGITUDE = "result_longitude";

    /**
     * Result "name".
     *
     * @var string
     */
    const RESULT_NAME = "result_name";

    /**
     * Result "old city".
     *
     * @var string
     */
    const RESULT_OLDCITY = "result_oldcity";

    /**
     * Result "old city code".
     *
     * @var string
     */
    const RESULT_OLDCITYCODE = "result_oldcitycode";

    /**
     * Result "postcode".
     *
     * @var string
     */
    const RESULT_POSTCODE = "result_postcode";

    /**
     * Result "score".
     *
     * @var string
     */
    const RESULT_SCORE = "result_score";

    /**
     * Result "street".
     *
     * @var string
     */
    const RESULT_STREET = "result_street";

    /**
     * Result "type".
     *
     * @var string
     */
    const RESULT_TYPE = "result_type";

    /**
     * Adresses.
     *
     * @var Adresse[]
     */
    private $adresses;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAdresses([]);
    }

    /**
     * Add an adresse.
     *
     * @param Adresse $adresse The adresse.
     * @return AbstractCsvResponse Returns this CSV response.
     */
    public function addAdresse(Adresse $adresse) {
        $this->adresses[] = $adresse;
        return $this;
    }

    /**
     * Enumerates the result columns.
     *
     * @return string[] Returns the result columns.
     */
    public static function enumResultColumns() {
        return [
            self::RESULT_CITY,
            self::RESULT_CITYCODE,
            self::RESULT_CONTEXT,
            self::RESULT_DISTANCE,
            self::RESULT_DISTRICT,
            self::RESULT_HOUSENUMBER,
            self::RESULT_ID,
            self::RESULT_LABEL,
            self::RESULT_LATITUDE,
            self::RESULT_LONGITUDE,
            self::RESULT_NAME,
            self::RESULT_OLDCITY,
            self::RESULT_OLDCITYCODE,
            self::RESULT_POSTCODE,
            self::RESULT_SCORE,
            self::RESULT_STREET,
            self::RESULT_TYPE,
        ];
    }

    /**
     * Get the adresses.
     *
     * @return Adresse[] Returns the adresses.
     */
    public function getAdresses() {
        return $this->adresses;
    }

    /**
     * Set the adresses.
     *
     * @param Adresse[] $adresses The adresses.
     * @return AbstractCsvResponse Returns this CSV response.
     */
    protected function setAdresses(array $adresses) {
        $this->adresses = $adresses;
        return $this;
    }

}