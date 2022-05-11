<?php
declare(strict_types=1);

class JsonParseException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $messageM = "An error occurred when try convert json to array of objects."." ".$message;
        parent::__construct($messageM, $code, $previous);
    }
}