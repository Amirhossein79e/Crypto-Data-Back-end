<?php


namespace crypto\model\entity;
use JsonSerializable;

class Quote implements DataClass,JsonSerializable
{
    /**
     * @name USD
     */
    private Usd $usd;

    /**
     * @return Usd
     */
    public function getUsd(): Usd
    {
        return $this->usd;
    }

    /**
     * @param Usd $usd
     */
    public function setUsd(Usd $usd): void
    {
        $this->usd = $usd;
    }


    public function __toString(): string
    {
        return "(".$this->getUsd().")";
    }


    public function jsonSerialize()
    {
        return [
            'price' => $this->getUsd()->getPrice()
            ,'volume_24h' => $this->getUsd()->getVolume24H()
            ,'volume_change_24h' => $this->getUsd()->getVolumeChange24H()
            ,'percent_change_1h' => $this->getUsd()->getPercentChange1H()
            ,'percent_change_24h' => $this->getUsd()->getPercentChange24H()
            ,'percent_change_7d' => $this->getUsd()->getPercentChange7D()
            ,'market_cap' => $this->getUsd()->getMarketCap()
            ,'market_cap_dominance' => $this->getUsd()->getMarketCapDominance()
            ,'fully_diluted_market_cap' => $this->getUsd()->getFullyDistributedMarketCap()
            ,'last_updated' => $this->getUsd()->getLastUpdatedPrice()->format("c")
        ];
    }

}