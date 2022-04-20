<?php


namespace crypto\model\entity;
use DateTime;
use JsonSerializable;

class Crypto implements DataClass,JsonSerializable
{
    private int $id;

    private string $name;

    private string $symbol;

    private string $slug;

    /**
     * @name cmc_rank
     */
    private ?int $cmcRank = null;

    /**
     * @name num_market_pairs
     */
    private int $numMarketPairs;

    /**
     * @name circulating_supply
     */
    private int $circulatingSupply;

    /**
     * @name total_supply
     */
    private int $totalSupply;

    /**
     * @name max_supply
     */
    private int $maxSupply;

    /**
     * @name last_updated
     */
    private DateTime $lastUpdated;

    /**
     * @name date_added
     */
    private DateTime $dateAdded;

    private array $tags;

    private ?array $platform = null;

    /**
     * @name self_reported_circulating_supply
     */
    private ?int $selfReportedCirculatingSupply = null;

    /**
     * @name self_reported_market_cap
     */
    private ?int $selfReportedMarketCap = null;

    /**
     * @name quote
     */
    private Quote $quote;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return int
     */
    public function getCmcRank(): ?int
    {
        return $this->cmcRank;
    }

    /**
     * @param int $cmcRank
     */
    public function setCmcRank(int $cmcRank): void
    {
        $this->cmcRank = $cmcRank;
    }

    /**
     * @return int
     */
    public function getNumMarketPairs(): int
    {
        return $this->numMarketPairs;
    }

    /**
     * @param int $numMarketPairs
     */
    public function setNumMarketPairs(int $numMarketPairs): void
    {
        $this->numMarketPairs = $numMarketPairs;
    }

    /**
     * @return int
     */
    public function getCirculatingSupply(): int
    {
        return $this->circulatingSupply;
    }

    /**
     * @param int $circulatingSupply
     */
    public function setCirculatingSupply(int $circulatingSupply): void
    {
        $this->circulatingSupply = $circulatingSupply;
    }

    /**
     * @return int
     */
    public function getTotalSupply(): int
    {
        return $this->totalSupply;
    }

    /**
     * @param int $totalSupply
     */
    public function setTotalSupply(int $totalSupply): void
    {
        $this->totalSupply = $totalSupply;
    }

    /**
     * @return int
     */
    public function getMaxSupply(): int
    {
        return $this->maxSupply;
    }

    /**
     * @param int $maxSupply
     */
    public function setMaxSupply(int $maxSupply): void
    {
        $this->maxSupply = $maxSupply;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdated(): DateTime
    {
        return $this->lastUpdated;
    }

    /**
     * @param DateTime $lastUpdated
     */
    public function setLastUpdated(DateTime $lastUpdated): void
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->dateAdded;
    }

    /**
     * @param DateTime $dateAdded
     */
    public function setDateAdded(DateTime $dateAdded): void
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param array $platform
     */
    public function setPlatform(array $platform): void
    {
        $this->platform = $platform;
    }

    /**
     * @return int
     */
    public function getSelfReportedCirculatingSupply(): ?int
    {
        return $this->selfReportedCirculatingSupply;
    }

    /**
     * @param int $selfReportedCirculatingSupply
     */
    public function setSelfReportedCirculatingSupply(int $selfReportedCirculatingSupply): void
    {
        $this->selfReportedCirculatingSupply = $selfReportedCirculatingSupply;
    }

    /**
     * @return int
     */
    public function getSelfReportedMarketCap(): ?int
    {
        return $this->selfReportedMarketCap;
    }

    /**
     * @param int $selfReportedMarketCap
     */
    public function setSelfReportedMarketCap(int $selfReportedMarketCap): void
    {
        $this->selfReportedMarketCap = $selfReportedMarketCap;
    }

    /**
     * @return Quote
     */
    public function getQuote(): Quote
    {
        return $this->quote;
    }

    /**
     * @param Quote $quote
     */
    public function setQuote(Quote $quote): void
    {
        $this->quote = $quote;
    }


    public function __toString() : string
    {
        return "("
            .$this->getId().","
            .$this->getName().","
            .$this->getSymbol().","
            .$this->getSlug().","
            .$this->getCmcRank().","
            .$this->getNumMarketPairs().","
            .$this->getCirculatingSupply().","
            .$this->getTotalSupply().","
            .$this->getMaxSupply().","
            .$this->getLastUpdated()->format("c").","
            .$this->getDateAdded()->format("c").","
            .json_encode($this->getTags()).","
            .$this->getPlatform().","
            .$this->getSelfReportedCirculatingSupply().","
            .$this->getSelfReportedMarketCap().","
            .$this->getSelfReportedCirculatingSupply().","
            .$this->getQuote()
            .")";
    }


    public function jsonSerialize()
    {
        return [
                "id" => $this->getId()
                ,"name" => $this->getName()
                ,"symbol" => $this->getSymbol()
                ,"slug" => $this->getSlug()
                ,"cmc_rank" => $this->getCmcRank()
                ,"num_market_pairs" => $this->getNumMarketPairs()
                ,"circulating_supply" => $this->getCirculatingSupply()
                ,"total_supply" => $this->getTotalSupply()
                ,"max_supply" => $this->getMaxSupply()
                ,"last_updated" => $this->getLastUpdated()->format("c")
                ,"date_added" => $this->getDateAdded()->format("c")
                ,"tags" => $this->getTags()
                ,"platform" => $this->getPlatform()
                ,"self_reported_circulating_supply" => $this->getSelfReportedCirculatingSupply()
                ,"self_reported_market_cap" => $this->getSelfReportedMarketCap()
                ,"quote" => $this->getQuote()
        ];
    }

}