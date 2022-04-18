<?php


namespace crypto\model\remote;


interface RemoteDao
{
    public function getCryptos(string $apiKey, int $offset) : array ;
}