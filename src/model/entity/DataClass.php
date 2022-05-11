<?php


namespace crypto\model\entity;


interface DataClass
{
    /**
     * This method generates a comma separated string from class fields
     * @return string
     */
    public function __toString() : string ;
}