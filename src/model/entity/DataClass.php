<?php


namespace crypto\model\entity;


interface DataClass
{
    /**
     * This method generates an comma separated string from class fields
     * @return string
     */
    public function __toString() : string ;
}