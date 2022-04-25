<?php


namespace crypto\model\remote;
use ConnectionException;
use crypto\model\entity\Crypto;
use crypto_data\util\JsonMapper;

class ApiProvider implements RemoteDao
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


    public function getCryptos(string $apiKey, int $offset = 1) : string|false
    {
        $curl = curl_init("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=$offset&limit=10");

        curl_setopt($curl,CURLOPT_HTTPGET,true);
        curl_setopt($curl,CURLOPT_HTTPHEADER,array("X-CMC_PRO_API_KEY: $apiKey"));
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

        return curl_exec($curl);
//        if ($result != null && mb_strlen($result) > 0 && str_starts_with($result,"{"))
//        {
////            $firstIndex = mb_stripos($result,"[");
////            $lastIndex = mb_strripos($result,"]") + 1;
////
////            return JsonMapper::map(substr($result,$firstIndex,$lastIndex-$firstIndex),Crypto::class);
//            return $result;
//
//        }else
//            {
//                throw new ConnectionException("An error occurred when try to get response from external server");
//                return false;
//            }
    }

}