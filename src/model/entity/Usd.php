<?php


namespace crypto\model\entity;
use DateTime;
use JsonSerializable;

class Usd implements DataClass,JsonSerializable
{
    private float $price;

    /**
     * @name volume_24h
     */
    private float $volume24H;

    /**
     * @name volume_change_24h
     */
    private float $volumeChange24H;

    /**
     * @name percent_change_1h
     */
    private float $percentChange1H;

    /**
     * @name percent_change_24h
     */
    private float $percentChange24H;

    /**
     * @name percent_change_7d
     */
    private float $percentChange7D;

    /**
     * @name market_cap
     */
    private float $marketCap;

    /**
     * @name market_cap_dominance
     */
    private float $marketCapDominance;

    /**
     * @name fully_diluted_market_cap
     */
    private float $fullyDistributedMarketCap;

    /**
     * @name last_updated
     */
    private DateTime $lastUpdatedPrice;

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
    public function getVolume24H(): float
    {
        return $this->volume24H;
    }

    /**
     * @param float $volume24H
     */
    public function setVolume24H(float $volume24H): void
    {
        $this->volume24H = $volume24H;
    }

    /**
     * @return float
     */
    public function getVolumeChange24H(): float
    {
        return $this->volumeChange24H;
    }

    /**
     * @param float $volumeChange24H
     */
    public function setVolumeChange24H(float $volumeChange24H): void
    {
        $this->volumeChange24H = $volumeChange24H;
    }

    /**
     * @return float
     */
    public function getPercentChange1H(): float
    {
        return $this->percentChange1H;
    }

    /**
     * @param float $percentChange1H
     */
    public function setPercentChange1H(float $percentChange1H): void
    {
        $this->percentChange1H = $percentChange1H;
    }

    /**
     * @return float
     */
    public function getPercentChange24H(): float
    {
        return $this->percentChange24H;
    }

    /**
     * @param float $percentChange24H
     */
    public function setPercentChange24H(float $percentChange24H): void
    {
        $this->percentChange24H = $percentChange24H;
    }

    /**
     * @return float
     */
    public function getPercentChange7D(): float
    {
        return $this->percentChange7D;
    }

    /**
     * @param float $percentChange7D
     */
    public function setPercentChange7D(float $percentChange7D): void
    {
        $this->percentChange7D = $percentChange7D;
    }

    /**
     * @return float
     */
    public function getMarketCap(): float
    {
        return $this->marketCap;
    }

    /**
     * @param float $marketCap
     */
    public function setMarketCap(float $marketCap): void
    {
        $this->marketCap = $marketCap;
    }

    /**
     * @return float
     */
    public function getMarketCapDominance(): float
    {
        return $this->marketCapDominance;
    }

    /**
     * @param float $marketCapDominance
     */
    public function setMarketCapDominance(float $marketCapDominance): void
    {
        $this->marketCapDominance = $marketCapDominance;
    }

    /**
     * @return float
     */
    public function getFullyDistributedMarketCap(): float
    {
        return $this->fullyDistributedMarketCap;
    }

    /**
     * @param float $fullyDistributedMarketCap
     */
    public function setFullyDistributedMarketCap(float $fullyDistributedMarketCap): void
    {
        $this->fullyDistributedMarketCap = $fullyDistributedMarketCap;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdatedPrice(): DateTime
    {
        return $this->lastUpdatedPrice;
    }

    /**
     * @param DateTime $lastUpdatedPrice
     */
    public function setLastUpdatedPrice(DateTime $lastUpdatedPrice): void
    {
        $this->lastUpdatedPrice = $lastUpdatedPrice;
    }


    public function __toString() : string
    {
        return "("
            .$this->getPrice().","
            .$this->getVolume24H().","
            .$this->getVolumeChange24H().","
            .$this->getPercentChange1H().","
            .$this->getPercentChange24H().","
            .$this->getPercentChange7D().","
            .$this->getMarketCap().","
            .$this->getMarketCapDominance().","
            .$this->getFullyDistributedMarketCap().","
            .$this->getLastUpdatedPrice()->format("c")
            .")";
    }


    public function jsonSerialize()
    {
        return [
            'price' => $this->getPrice()
            ,'volume_24h' => $this->getVolume24H()
            ,'volume_change_24h' => $this->getVolumeChange24H()
            ,'percent_change_1h' => $this->getPercentChange1H()
            ,'percent_change_24h' => $this->getPercentChange24H()
            ,'percent_change_7d' => $this->getPercentChange7D()
            ,'market_cap' => $this->getMarketCap()
            ,'market_cap_dominance' => $this->getMarketCapDominance()
            ,'fully_diluted_market_cap' => $this->getFullyDistributedMarketCap()
            ,'last_updated' => $this->getLastUpdatedPrice()->format("c")
        ];
    }

}