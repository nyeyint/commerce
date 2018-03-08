<?php

namespace App\Exceptions;

use Exception;

class DataTypeNotSupported extends Exception
{
    public function __construct($message = null, $code = 500, Exception $previous = null) {
      parent::__construct($message, $code, $previous);
    }
}
