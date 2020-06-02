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

    use StringLabelTrait;
    use StringNameTrait;
    use StringTypeTrait;

    /**
     * City.
     *
     * @var string
     */
    private $city;

    /**
     * City code.
     *
     * @var string
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
     * @var string
     */
    private $context;

    /**
     * Distance.
     *
     * @var string
     */
    private $distance;

    /**
     * District.
     *
     * @var string
     */
    private $district;

    /**
     * House number.
     *
     * @var string
     */
    private $houseNumber;

    /**
     * Id.
     *
     * @var string.
     */
    private $id;

    /**
     * Latitude.
     *
     * @var string
     */
    private $latitude;

    /**
     * Longitude.
     *
     * @var string
     */
    private $longitude;

    /**
     * Old city.
     *
     * @var string
     */
    private $oldCity;

    /**
     * Old city code.
     *
     * @var string
     */
    private $oldCityCode;

    /**
     * Postcode.
     *
     * @var string
     */
    private $postcode;

    /**
     * Score.
     *
     * @var string
     */
    private $score;

    /**
     * Street.
     *
     * @var string
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
    public function addColumn($k, $v) {
        $this->columns[$k] = $v;
        return $this;
    }

    /**
     * Get the city.
     *
     * @return string Returns the city.
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the city code.
     *
     * @return string Returns the city.
     */
    public function getCityCode() {
        return $this->cityCode;
    }

    /**
     * Get the columns.
     *
     * @return array Returns the columns.
     */
    public function getColumns() {
        return $this->columns;
    }

    /**
     * Get the context.
     *
     * @return string Returns the context.
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * Get the distance.
     *
     * @return string Returns the distance.
     */
    public function getDistance() {
        return $this->distance;
    }

    /**
     * Get the district.
     *
     * @return string Returns the district.
     */
    public function getDistrict() {
        return $this->district;
    }

    /**
     * Get the house number.
     *
     * @return string Returns the house number.
     */
    public function getHouseNumber() {
        return $this->houseNumber;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set the latitude.
     *
     * @return string Returns the latitude.
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Get the longitude.
     *
     * @return string Returns the longitude.
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Get the old city.
     *
     * @return string Returns the old city.
     */
    public function getOldCity() {
        return $this->oldCity;
    }

    /**
     * Get the old city code.
     *
     * @return string Returns the old city code.
     */
    public function getOldCityCode() {
        return $this->oldCityCode;
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
     * Get the score.
     *
     * @return string Returns the score.
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * Get the street.
     *
     * @return string Returns the street.
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return Adresse Returns this adresse.
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the city code.
     *
     * @param string $cityCode The city code.
     * @return Adresse Returns this adresse.
     */
    public function setCityCode($cityCode) {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Set the columns.
     *
     * @param array $columns The columns.
     * @return Adresse Returns this adresse.
     */
    protected function setColumns(array $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Set the context.
     *
     * @param string $context The context.
     * @return Adresse Returns this adresse.
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * The distance.
     *
     * @param string $distance The distance.
     * @return Adresse Returns this adresse.
     */
    public function setDistance($distance) {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Set the district.
     *
     * @param string $district The district.
     * @return Adresse Returns this adresse.
     */
    public function setDistrict($district) {
        $this->district = $district;
        return $this;
    }

    /**
     * Set the house number.
     *
     * @param string $houseNumber The house number.
     * @return Adresse Returns this adresse.
     */
    public function setHouseNumber($houseNumber) {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return Adresse Returns this adresse.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param string $latitude The latitude.
     * @return Adresse Returns this adresse.
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param string $longitude The longitude.
     * @return Adresse Returns this adresse.
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the old city.
     *
     * @param string $oldCity The old city.
     * @return Adresse Returns this adresse.
     */
    public function setOldCity($oldCity) {
        $this->oldCity = $oldCity;
        return $this;
    }

    /**
     * Set the old city code.
     *
     * @param string $oldCityCode The old city code.
     * @return Adresse Returns this adresse.
     */
    public function setOldCityCode($oldCityCode) {
        $this->oldCityCode = $oldCityCode;
        return $this;
    }

    /**
     * Set the postcode.
     *
     * @param string $postcode The postcode.
     * @return Adresse Returns this adresse.
     */
    public function setPostcode($postcode) {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Set the score.
     *
     * @param string $score Teh score.
     * @return Adresse Returns this adresse.
     */
    public function setScore($score) {
        $this->score = $score;
        return $this;
    }

    /**
     * Set the street.
     *
     * @param string $street Teh street.
     * @return Adresse Returns this adresse.
     */
    public function setStreet($street) {
        $this->street = $street;
        return $this;
    }
}