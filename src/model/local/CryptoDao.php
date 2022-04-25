<?php


namespace crypto\model\local;
use crypto\model\entity\Crypto;

interface CryptoDao
{
    public function insert(Crypto... $cryptos) : bool;

    public function select(int $limit, int $offset) : array|false;

    public function update(Crypto... $cryptos) : bool;

    public function delete(int... $cryptoIds) : bool;
}