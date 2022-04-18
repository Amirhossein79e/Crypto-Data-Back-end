<?php


namespace crypto\model\remote;
use ConnectionException;
use crypto\model\entity\Crypto;
use crypto_data\util\JsonMapper;

class RemoteDataProvider implements RemoteDao
{
    private static ?RemoteDao $dao = null;

    private function __construct()
    {

    }


    public static function createDao() : RemoteDao
    {
        if (self::$dao == null)
        {
            self::$dao = new self();
            return self::$dao;
        }else
        {
            return self::$dao;
        }
    }


    public function getCryptos(string $apiKey, int $start) : array
    {
        $curl = curl_init("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=$start&limit=200");

        curl_setopt($curl,CURLOPT_HTTPGET,true);
        curl_setopt($curl,CURLOPT_HTTPHEADER,array("X-CMC_PRO_API_KEY: $apiKey"));
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

        $result = curl_exec($curl);

        if ($result != null && mb_strlen($result) > 0 && str_starts_with($result,"{"))
        {
            $firstIndex = mb_stripos($result,"[");
            $lastIndex = mb_strripos($result,"]") + 1;

            return JsonMapper::map(substr($result,$firstIndex,$lastIndex-$firstIndex),Crypto::class);
        }else
            {
                throw new ConnectionException("An error occurred when try to get response from external server");
            }
    }

}