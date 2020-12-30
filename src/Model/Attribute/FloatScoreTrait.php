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
     * @var string|null
     */
    private $score;

    /**
     * Get the score.
     *
     * @return string|null Returns the score.
     */
    public function getScore(): ?string {
        return $this->score;
    }

    /**
     * Set the score.
     *
     * @param string|null $score The score.
     */
    public function setScore(?string $score): self {
        $this->score = $score;
        return $this;
    }
}