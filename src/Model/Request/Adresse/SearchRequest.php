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

use WBW\Library\Core\Model\Attribute\StringTypeTrait;
use WBW\Library\GeoAPI\Model\AbstractRequest;
use WBW\Library\GeoAPI\Model\Attribute\FloatLatTrait;
use WBW\Library\GeoAPI\Model\Attribute\FloatLonTrait;

/**
 * Search request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Adresse
 */
class SearchRequest extends AbstractRequest {

    use FloatLatTrait;
    use FloatLonTrait;
    use StringTypeTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/search/";

    /**
     * Type "house number".
     *
     * @var string
     */
    const TYPE_HOUSE_NUMBER = "housenumber";

    /**
     * Type "locality".
     *
     * @var string
     */
    const TYPE_LOCALITY = "locality";

    /**
     * Type "municipality".
     *
     * @var string
     */
    const TYPE_MUNICIPALITY = "municipality";

    /**
     * Type "street".
     *
     * @var string
     */
    const TYPE_STREET = "street";

    /**
     * Autocomplete.
     *
     * @var bool
     */
    private $autocomplete;

    /**
     * City code.
     *
     * @var string
     */
    private $cityCode;

    /**
     * Limit.
     *
     * @var int
     */
    private $limit;

    /**
     * Postcode.
     *
     * @var string
     */
    private $postcode;

    /**
     * Query.
     *
     * @var string
     */
    private $q;

    /**
     * Constructor.
     *
     * @param string|null $q The query.
     */
    public function __construct($q = null) {
        $this->setQ($q);
    }

    /**
     * Enumerates the types.
     *
     * @return string[] Returns the types.
     */
    public static function enumTypes() {
        return [
            self::TYPE_HOUSE_NUMBER,
            self::TYPE_LOCALITY,
            self::TYPE_MUNICIPALITY,
            self::TYPE_STREET,
        ];
    }

    /**
     * Get the autocomplete.
     *
     * @return bool Returns the autocomplete.
     */
    public function getAutocomplete() {
        return $this->autocomplete;
    }

    /**
     * Get the city code.
     *
     * @return string Returns the city code.
     */
    public function getCityCode() {
        return $this->cityCode;
    }

    /**
     * Get the limit.
     *
     * @return int Returns the limit.
     */
    public function getLimit() {
        return $this->limit;
    }

    /**
     * Get the postcode.
     *
     * @return string Returns the postcode.
     */
    public function getPostcode() {
        return $this->postcode;
    }

    /**
     * Get the query.
     *
     * @return string Returns the query.
     */
    public function getQ() {
        return $this->q;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath() {
        return self::RESOURCE_PATH;
    }

    /**
     * Get the autocomplete.
     *
     * @param bool $autocomplete The autocomplete.
     * @return SearchRequest Returns this search request.
     */
    public function setAutocomplete($autocomplete) {
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * Set the city code.
     *
     * @param string $cityCode The city code.
     * @return SearchRequest Returns this search request.
     */
    public function setCityCode($cityCode) {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Set the limit.
     *
     * @param int $limit The limit.
     * @return SearchRequest Returns this search request.
     */
    public function setLimit($limit) {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Set the postcode.
     *
     * @param string $postcode The postcode.
     * @return SearchRequest Returns this search request.
     */
    public function setPostcode($postcode) {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Set the query.
     *
     * @param string $q The query.
     * @return SearchRequest Returns this search request.
     */
    public function setQ($q) {
        $this->q = $q;
        return $this;
    }
}