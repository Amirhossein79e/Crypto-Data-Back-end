<?php
declare(strict_types=1);

namespace crypto\util;
use OpenSSLAsymmetricKey;

class SecurityManager
{

    public static function generateKeyPair() : OpenSSLAsymmetricKey|false
    {
        $config = ["private_key_bits" => 2048, "private_key_type" => OPENSSL_KEYTYPE_RSA];
        return openssl_pkey_new($config);
    }


    public static function extractPublicKey(OpenSSLAsymmetricKey|string $keyPair) : string|false
    {
        $detail = openssl_pkey_get_details($keyPair);
        return openssl_pkey_get_public($detail["key"]);
    }

}