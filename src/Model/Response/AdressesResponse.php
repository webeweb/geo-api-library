<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Response;

use WBW\Library\GeoAPI\Model\AbstractResponse;
use WBW\Library\GeoAPI\Model\Adresse;

/**
 * Adresses response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Response
 */
class AdressesResponse extends AbstractResponse {

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
     * @return AdressesResponse Returns this adresses response.
     */
    public function addAdresse(Adresse $adresse) {
        $this->adresses[] = $adresse;
        return $this;
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
     * @return AdressesResponse Returns this adresses response.
     */
    protected function setAdresses(array $adresses) {
        $this->adresses = $adresses;
        return $this;
    }
}