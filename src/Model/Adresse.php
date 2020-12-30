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

use WBW\Library\Core\Model\Attribute\StringIdTrait;
use WBW\Library\Core\Model\Attribute\StringLabelTrait;
use WBW\Library\Core\Model\Attribute\StringNameTrait;
use WBW\Library\Core\Model\Attribute\StringTypeTrait;

/**
 * Adresse.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model
 */
class Adresse {

    use StringIdTrait;
    use StringLabelTrait;
    use StringNameTrait;
    use StringTypeTrait;

    /**
     * City.
     *
     * @var string|null
     */
    private $city;

    /**
     * City code.
     *
     * @var string|null
     */
    private $cityCode;

    /**
     * Columns.
     *
     * @var array
     */
    private $columns;

    /**
     * Context.
     *
     * @var string|null
     */
    private $context;

    /**
     * Distance.
     *
     * @var string|null
     */
    private $distance;

    /**
     * District.
     *
     * @var string|null
     */
    private $district;

    /**
     * House number.
     *
     * @var string|null
     */
    private $houseNumber;

    /**
     * Latitude.
     *
     * @var string|null
     */
    private $latitude;

    /**
     * Longitude.
     *
     * @var string|null
     */
    private $longitude;

    /**
     * Old city.
     *
     * @var string|null
     */
    private $oldCity;

    /**
     * Old city code.
     *
     * @var string|null
     */
    private $oldCityCode;

    /**
     * Postcode.
     *
     * @var string|null
     */
    private $postcode;

    /**
     * Score.
     *
     * @var string|null
     */
    private $score;

    /**
     * Street.
     *
     * @var string|null
     */
    private $street;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setColumns([]);
    }

    /**
     * Add a column.
     *
     * @param string $k The key.
     * @param string $v The value.
     * @return Adresse Returns this adresse.
     */
    public function addColumn(string $k, string $v): Adresse {
        $this->columns[$k] = $v;
        return $this;
    }

    /**
     * Get the city.
     *
     * @return string|null Returns the city.
     */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Get the city code.
     *
     * @return string|null Returns the city.
     */
    public function getCityCode(): ?string {
        return $this->cityCode;
    }

    /**
     * Get the columns.
     *
     * @return array Returns the columns.
     */
    public function getColumns(): array {
        return $this->columns;
    }

    /**
     * Get the context.
     *
     * @return string|null Returns the context.
     */
    public function getContext(): ?string {
        return $this->context;
    }

    /**
     * Get the distance.
     *
     * @return string|null Returns the distance.
     */
    public function getDistance(): ?string {
        return $this->distance;
    }

    /**
     * Get the district.
     *
     * @return string|null Returns the district.
     */
    public function getDistrict(): ?string {
        return $this->district;
    }

    /**
     * Get the house number.
     *
     * @return string|null Returns the house number.
     */
    public function getHouseNumber(): ?string {
        return $this->houseNumber;
    }

    /**
     * Set the latitude.
     *
     * @return string|null Returns the latitude.
     */
    public function getLatitude(): ?string {
        return $this->latitude;
    }

    /**
     * Get the longitude.
     *
     * @return string|null Returns the longitude.
     */
    public function getLongitude(): ?string {
        return $this->longitude;
    }

    /**
     * Get the old city.
     *
     * @return string|null Returns the old city.
     */
    public function getOldCity(): ?string {
        return $this->oldCity;
    }

    /**
     * Get the old city code.
     *
     * @return string|null Returns the old city code.
     */
    public function getOldCityCode(): ?string {
        return $this->oldCityCode;
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
     * Get the score.
     *
     * @return string|null Returns the score.
     */
    public function getScore(): ?string {
        return $this->score;
    }

    /**
     * Get the street.
     *
     * @return string|null Returns the street.
     */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Set the city.
     *
     * @param string|null $city The city.
     * @return Adresse Returns this adresse.
     */
    public function setCity(?string $city): Adresse {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the city code.
     *
     * @param string|null $cityCode The city code.
     * @return Adresse Returns this adresse.
     */
    public function setCityCode(?string $cityCode): Adresse {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Set the columns.
     *
     * @param array $columns The columns.
     * @return Adresse Returns this adresse.
     */
    protected function setColumns(array $columns): Adresse {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Set the context.
     *
     * @param string|null $context The context.
     * @return Adresse Returns this adresse.
     */
    public function setContext(?string $context): Adresse {
        $this->context = $context;
        return $this;
    }

    /**
     * The distance.
     *
     * @param string|null $distance The distance.
     * @return Adresse Returns this adresse.
     */
    public function setDistance(?string $distance): Adresse {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Set the district.
     *
     * @param string|null $district The district.
     * @return Adresse Returns this adresse.
     */
    public function setDistrict(?string $district): Adresse {
        $this->district = $district;
        return $this;
    }

    /**
     * Set the house number.
     *
     * @param string|null $houseNumber The house number.
     * @return Adresse Returns this adresse.
     */
    public function setHouseNumber(?string $houseNumber): Adresse {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param string|null $latitude The latitude.
     * @return Adresse Returns this adresse.
     */
    public function setLatitude(?string $latitude): Adresse {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param string|null $longitude The longitude.
     * @return Adresse Returns this adresse.
     */
    public function setLongitude(?string $longitude): Adresse {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the old city.
     *
     * @param string|null $oldCity The old city.
     * @return Adresse Returns this adresse.
     */
    public function setOldCity(?string $oldCity): Adresse {
        $this->oldCity = $oldCity;
        return $this;
    }

    /**
     * Set the old city code.
     *
     * @param string|null $oldCityCode The old city code.
     * @return Adresse Returns this adresse.
     */
    public function setOldCityCode(?string $oldCityCode): Adresse {
        $this->oldCityCode = $oldCityCode;
        return $this;
    }

    /**
     * Set the postcode.
     *
     * @param string|null $postcode The postcode.
     * @return Adresse Returns this adresse.
     */
    public function setPostcode(?string $postcode): Adresse {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Set the score.
     *
     * @param string|null $score Teh score.
     * @return Adresse Returns this adresse.
     */
    public function setScore(?string $score): Adresse {
        $this->score = $score;
        return $this;
    }

    /**
     * Set the street.
     *
     * @param string|null $street The street.
     * @return Adresse Returns this adresse.
     */
    public function setStreet(?string $street): Adresse {
        $this->street = $street;
        return $this;
    }
}