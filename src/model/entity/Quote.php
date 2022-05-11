<?php
declare(strict_types=1);

namespace crypto\model\entity;
use JsonSerializable;

class Quote implements DataClass,JsonSerializable
{

    private Usd $USD;


    /**
     * @return Usd
     */
    public function getUSD(): Usd
    {
        return $this->USD;
    }

    /**
     * @param Usd $USD
     */
    public function setUSD(Usd $USD): void
    {
        $this->USD = $USD;
    }


    public function __toString(): string
    {
        return "(".$this->USD.")";
    }


    public function jsonSerialize() : array
    {
        return [
            'price' => $this->USD->getPrice()
            ,'volume24H' => $this->USD->getVolume24H()
            ,'volumeChange24H' => $this->USD->getVolumeChange24H()
            ,'percentChange1H' => $this->USD->getPercentChange1H()
            ,'percentChange24H' => $this->USD->getPercentChange24H()
            ,'percentChange7D' => $this->USD->getPercentChange7D()
            ,'marketCap' => $this->USD->getMarketCap()
            ,'marketCapDominance' => $this->USD->getMarketCapdominance()
            ,'fullyDilutedMarketCap' => $this->USD->getFullyDilutedmarketcap()
            ,'lastUpdated' => $this->USD->getLastUpdated()->format("c")
        ];
    }

}