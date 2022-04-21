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
    private int $cmcRank;

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
    private ?int $maxSupply = null;

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
    public function getMaxSupply(): ?int
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
            .$this->id.","
            .$this->name.","
            .$this->symbol.","
            .$this->slug.","
            .$this->cmcRank.","
            .$this->numMarketPairs.","
            .$this->circulatingSupply.","
            .$this->totalSupply.","
            .($this->maxSupply ?? var_export($this->maxSupply,true)).","
            .$this->lastUpdated->format("c").","
            .$this->dateAdded->format("c").","
            .json_encode($this->tags).","
            .(($this->platform !== null) ? json_encode($this->platform) : var_export($this->platform,true)).","
            .($this->selfReportedCirculatingSupply ?? var_export($this->selfReportedCirculatingSupply,true)).","
            .($this->selfReportedMarketCap ?? var_export($this->selfReportedMarketCap,true)).","
            .$this->quote
            .")";
    }


    public function jsonSerialize()
    {
        return [
                "id" => $this->id
                ,"name" => $this->name
                ,"symbol" => $this->symbol
                ,"slug" => $this->slug
                ,"cmc_rank" => $this->cmcRank
                ,"num_market_pairs" => $this->numMarketPairs
                ,"circulating_supply" => $this->circulatingSupply
                ,"total_supply" => $this->totalSupply
                ,"max_supply" => $this->maxSupply
                ,"last_updated" => $this->lastUpdated->format("c")
                ,"date_added" => $this->dateAdded->format("c")
                ,"tags" => $this->tags
                ,"platform" => $this->platform
                ,"self_reported_circulating_supply" => $this->selfReportedCirculatingSupply
                ,"self_reported_market_cap" => $this->selfReportedMarketCap
                ,"quote" => $this->quote
        ];
    }

}