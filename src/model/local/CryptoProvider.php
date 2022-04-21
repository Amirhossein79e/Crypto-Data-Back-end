<?php


namespace crypto\model\local;
use crypto\model\entity\Crypto;

class CryptoProvider extends Database implements CryptoDao
{

    public function insert(Crypto... $cryptos) : bool
    {
        $valuesStr = "";

        for ($i = 0; $i < count($cryptos); $i++)
        {
            $valuesStr .= "(".str_replace("(","",str_replace(")","",$cryptos[$i])).")";

            if ($i < count($cryptos) - 1)
            {
                $valuesStr .= ",";
            }
        }

        $stmt = $this->mysqli->prepare("insert into crypto_data values ?");
        $stmt->bind_param("s",$valuesStr);
        return $stmt->execute();
    }

    public function select(int $limit = 200, int $offset = 0)
    {
        // TODO: Implement select() method.
    }

    public function update(Crypto ...$cryptos)
    {
        // TODO: Implement update() method.
    }

    public function delete(Crypto ...$cryptos)
    {
        // TODO: Implement delete() method.
    }

}