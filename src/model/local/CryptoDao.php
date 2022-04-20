<?php


namespace crypto\model\local;
use crypto\model\entity\Crypto;

interface CryptoDao
{
    public function insert(Crypto... $cryptos);

    public function select(int $limit, int $offset);

    public function update(Crypto... $cryptos);

    public function delete(Crypto... $cryptos);
}