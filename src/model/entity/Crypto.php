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

    private int $cmc_rank;

    private int $num_market_pairs;

    private int $circulating_supply;

    private int $total_supply;

    private ?int $max_supply = null;

    private DateTime $last_updated;

    private DateTime $date_added;

    private array $tags;

    private ?array $platform = null;

    private ?int $self_reported_circulating_supply = null;

    private ?int $self_reported_market_cap = null;

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
    public function getCmcRank(): int
    {
        return $this->cmc_rank;
    }

    /**
     * @param int $cmc_rank
     */
    public function setCmcRank(int $cmc_rank): void
    {
        $this->cmc_rank = $cmc_rank;
    }

    /**
     * @return int
     */
    public function getNumMarketPairs(): int
    {
        return $this->num_market_pairs;
    }

    /**
     * @param int $num_market_pairs
     */
    public function setNumMarketPairs(int $num_market_pairs): void
    {
        $this->num_market_pairs = $num_market_pairs;
    }

    /**
     * @return int
     */
    public function getCirculatingSupply(): int
    {
        return $this->circulating_supply;
    }

    /**
     * @param int $circulating_supply
     */
    public function setCirculatingSupply(int $circulating_supply): void
    {
        $this->circulating_supply = $circulating_supply;
    }

    /**
     * @return int
     */
    public function getTotalSupply(): int
    {
        return $this->total_supply;
    }

    /**
     * @param int $total_supply
     */
    public function setTotalSupply(int $total_supply): void
    {
        $this->total_supply = $total_supply;
    }

    /**
     * @return int|null
     */
    public function getMaxSupply(): ?int
    {
        return $this->max_supply;
    }

    /**
     * @param int|null $max_supply
     */
    public function setMaxSupply(?int $max_supply): void
    {
        $this->max_supply = $max_supply;
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

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->date_added;
    }

    /**
     * @param DateTime $date_added
     */
    public function setDateAdded(DateTime $date_added): void
    {
        $this->date_added = $date_added;
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
     * @return array|null
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param array|null $platform
     */
    public function setPlatform(?array $platform): void
    {
        $this->platform = $platform;
    }

    /**
     * @return int|null
     */
    public function getSelfReportedCirculatingSupply(): ?int
    {
        return $this->self_reported_circulating_supply;
    }

    /**
     * @param int|null $self_reported_circulating_supply
     */
    public function setSelfReportedCirculatingSupply(?int $self_reported_circulating_supply): void
    {
        $this->self_reported_circulating_supply = $self_reported_circulating_supply;
    }

    /**
     * @return int|null
     */
    public function getSelfReportedMarketCap(): ?int
    {
        return $this->self_reported_market_cap;
    }

    /**
     * @param int|null $self_reported_market_cap
     */
    public function setSelfReportedMarketCap(?int $self_reported_market_cap): void
    {
        $this->self_reported_market_cap = $self_reported_market_cap;
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
            .$this->cmc_rank.","
            .$this->num_market_pairs.","
            .$this->circulating_supply.","
            .$this->total_supply.","
            .($this->max_supply ?? var_export($this->max_supply,true)).","
            .$this->last_updated->format("c").","
            .$this->date_added->format("c").","
            .json_encode($this->tags).","
            .(($this->platform !== null) ? json_encode($this->platform) : var_export($this->platform,true)).","
            .($this->self_reported_circulating_supply ?? var_export($this->self_reported_circulating_supply,true)).","
            .($this->self_reported_market_cap ?? var_export($this->self_reported_market_cap,true)).","
            .$this->quote
            .")";
    }


    public function jsonSerialize() : array
    {
        return [
                "id" => $this->id
                ,"name" => $this->name
                ,"symbol" => $this->symbol
                ,"slug" => $this->slug
                ,"cmcRank" => $this->cmc_rank
                ,"numMarketPairs" => $this->num_market_pairs
                ,"circulatingSupply" => $this->circulating_supply
                ,"totalSupply" => $this->total_supply
                ,"maxSupply" => $this->max_supply
                ,"lastUpdated" => $this->last_updated->format("c")
                ,"dateAdded" => $this->date_added->format("c")
                ,"tags" => $this->tags
                ,"platform" => $this->platform
                ,"selfReportedCirculatingSupply" => $this->self_reported_circulating_supply
                ,"selfReportedMarketCap" => $this->self_reported_market_cap
                ,"quote" => $this->quote
        ];
    }

}