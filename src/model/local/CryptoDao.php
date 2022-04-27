<?php


namespace crypto\model\local;
use crypto\model\entity\Crypto;

interface CryptoDao
{
    public function insert(Crypto... $cryptos) : bool;

    public function listAll(int $limit, int $offset) : array|false;

    public function listInitAll(int $limit, int $offset) : array|false;

    public function listCustom(int $limit, int $offset, int... $cryptoIds) : array|false;

    public function listInitCustom(int $limit, int $offset, int... $cryptoIds) : array|false;

    public function listSingle(int $cryptoId) : object|null|false;

    public function find(int $limit, int $offset, string $keyword) : array|false;

    public function update(Crypto... $cryptos) : bool;

    public function delete(int... $cryptoIds) : bool;
}