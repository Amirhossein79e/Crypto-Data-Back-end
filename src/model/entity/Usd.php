<?php
declare(strict_types=1);

namespace crypto\model\entity;
use DateTime;
use JsonSerializable;

class Usd implements DataClass,JsonSerializable
{
    private float $price;

    private float $volume_24h;

    private float $volume_change_24h;

    private float $percent_change_1h;

    private float $percent_change_24h;

    private float $percent_change_7d;

    private float $market_cap;

    private float $market_cap_dominance;

    private float $fully_diluted_market_cap;

    private DateTime $last_updated;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getVolume24h(): float
    {
        return $this->volume_24h;
    }

    /**
     * @param float $volume_24h
     */
    public function setVolume24h(float $volume_24h): void
    {
        $this->volume_24h = $volume_24h;
    }

    /**
     * @return float
     */
    public function getVolumeChange24h(): float
    {
        return $this->volume_change_24h;
    }

    /**
     * @param float $volume_change_24h
     */
    public function setVolumeChange24h(float $volume_change_24h): void
    {
        $this->volume_change_24h = $volume_change_24h;
    }

    /**
     * @return float
     */
    public function getPercentChange1h(): float
    {
        return $this->percent_change_1h;
    }

    /**
     * @param float $percent_change_1h
     */
    public function setPercentChange1h(float $percent_change_1h): void
    {
        $this->percent_change_1h = $percent_change_1h;
    }

    /**
     * @return float
     */
    public function getPercentChange24h(): float
    {
        return $this->percent_change_24h;
    }

    /**
     * @param float $percent_change_24h
     */
    public function setPercentChange24h(float $percent_change_24h): void
    {
        $this->percent_change_24h = $percent_change_24h;
    }

    /**
     * @return float
     */
    public function getPercentChange7d(): float
    {
        return $this->percent_change_7d;
    }

    /**
     * @param float $percent_change_7d
     */
    public function setPercentChange7d(float $percent_change_7d): void
    {
        $this->percent_change_7d = $percent_change_7d;
    }

    /**
     * @return float
     */
    public function getMarketCap(): float
    {
        return $this->market_cap;
    }

    /**
     * @param float $market_cap
     */
    public function setMarketCap(float $market_cap): void
    {
        $this->market_cap = $market_cap;
    }

    /**
     * @return float
     */
    public function getMarketCapDominance(): float
    {
        return $this->market_cap_dominance;
    }

    /**
     * @param float $market_cap_dominance
     */
    public function setMarketCapDominance(float $market_cap_dominance): void
    {
        $this->market_cap_dominance = $market_cap_dominance;
    }

    /**
     * @return float
     */
    public function getFullyDilutedMarketCap(): float
    {
        return $this->fully_diluted_market_cap;
    }

    /**
     * @param float $fully_diluted_market_cap
     */
    public function setFullyDilutedMarketCap(float $fully_diluted_market_cap): void
    {
        $this->fully_diluted_market_cap = $fully_diluted_market_cap;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdated(): DateTime
    {
        return $this->last_updated;
    }

    /**
     * @param DateTime $last_updated
     */
    public function setLastUpdated(DateTime $last_updated): void
    {
        $this->last_updated = $last_updated;
    }


    public function __toString() : string
    {
        return "("
            .$this->price.","
            .$this->volume_24h.","
            .$this->volume_change_24h.","
            .$this->percent_change_1h.","
            .$this->percent_change_24h.","
            .$this->percent_change_7d.","
            .$this->market_cap.","
            .$this->market_cap_dominance.","
            .$this->fully_diluted_market_cap.","
            .$this->last_updated->format("c")
            .")";
    }


    public function jsonSerialize() : array
    {
        return [
            'price' => $this->price
            ,'volume24H' => $this->volume_24h
            ,'volumeChange24H' => $this->volume_change_24h
            ,'percentChange1H' => $this->percent_change_1h
            ,'percentChange24H' => $this->percent_change_24h
            ,'percentChange7D' => $this->percent_change_7d
            ,'marketCap' => $this->market_cap
            ,'marketCapDominance' => $this->market_cap_dominance
            ,'fullyDilutedMarketCap' => $this->fully_diluted_market_cap
            ,'lastUpdated' => $this->last_updated->format("c")
        ];
    }

}