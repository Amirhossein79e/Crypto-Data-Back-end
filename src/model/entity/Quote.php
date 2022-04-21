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
        return "(".$this->usd.")";
    }


    public function jsonSerialize()
    {
        return [
            'price' => $this->usd->getPrice()
            ,'volume_24h' => $this->usd->getVolume24H()
            ,'volume_change_24h' => $this->usd->getVolumeChange24H()
            ,'percent_change_1h' => $this->usd->getPercentChange1H()
            ,'percent_change_24h' => $this->usd->getPercentChange24H()
            ,'percent_change_7d' => $this->usd->getPercentChange7D()
            ,'market_cap' => $this->usd->getMarketCap()
            ,'market_cap_dominance' => $this->usd->getMarketCapDominance()
            ,'fully_diluted_market_cap' => $this->usd->getFullyDistributedMarketCap()
            ,'last_updated' => $this->usd->getLastUpdatedPrice()->format("c")
        ];
    }

}