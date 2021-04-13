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

use WBW\Library\Core\Model\Attribute\StringTypeTrait;
use WBW\Library\GeoAPI\Model\Attribute\FloatLatTrait;
use WBW\Library\GeoAPI\Model\Attribute\FloatLonTrait;
use WBW\Library\GeoAPI\Request\AbstractRequest;

/**
 * Search request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Request\Adresse
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
     * @var bool|null
     */
    private $autocomplete;

    /**
     * City code.
     *
     * @var string|null
     */
    private $cityCode;

    /**
     * Limit.
     *
     * @var int|null
     */
    private $limit;

    /**
     * Postcode.
     *
     * @var string|null
     */
    private $postcode;

    /**
     * Query.
     *
     * @var string|null
     */
    private $q;

    /**
     * Constructor.
     *
     * @param string|null $q The query.
     */
    public function __construct(string $q = null) {
        parent::__construct();
        $this->setQ($q);
    }

    /**
     * Enumerates the types.
     *
     * @return string[] Returns the types.
     */
    public static function enumTypes(): array {
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
     * @return bool|null Returns the autocomplete.
     */
    public function getAutocomplete(): ?bool {
        return $this->autocomplete;
    }

    /**
     * Get the city code.
     *
     * @return string|null Returns the city code.
     */
    public function getCityCode(): ?string {
        return $this->cityCode;
    }

    /**
     * Get the limit.
     *
     * @return int|null Returns the limit.
     */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Get the postcode.
     *
     * @return string|null Returns the postcode.
     */
    public function getPostcode(): ?string {
        return $this->postcode;
    }

    /**
     * Get the query.
     *
     * @return string|null Returns the query.
     */
    public function getQ(): ?string {
        return $this->q;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * Get the autocomplete.
     *
     * @param bool|null $autocomplete The autocomplete.
     * @return SearchRequest Returns this search request.
     */
    public function setAutocomplete(?bool $autocomplete): SearchRequest {
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * Set the city code.
     *
     * @param string|null $cityCode The city code.
     * @return SearchRequest Returns this search request.
     */
    public function setCityCode(?string $cityCode): SearchRequest {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Set the limit.
     *
     * @param int|null $limit The limit.
     * @return SearchRequest Returns this search request.
     */
    public function setLimit(?int $limit): SearchRequest {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Set the postcode.
     *
     * @param string|null $postcode The postcode.
     * @return SearchRequest Returns this search request.
     */
    public function setPostcode(?string $postcode): SearchRequest {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Set the query.
     *
     * @param string|null $q The query.
     * @return SearchRequest Returns this search request.
     */
    public function setQ(?string $q): SearchRequest {
        $this->q = $q;
        return $this;
    }
}