<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source score.
 */

namespace WBW\Library\GeoAPI\Model\Attribute;

/**
 * Float score trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait FloatScoreTrait {

    /**
     * Score.
     *
     * @var string
     */
    private $score;

    /**
     * Get the score.
     *
     * @return string Returns the score.
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * Set the score.
     *
     * @param string $score The score.
     */
    public function setScore($score) {
        $this->score = $score;
        return $this;
    }
}