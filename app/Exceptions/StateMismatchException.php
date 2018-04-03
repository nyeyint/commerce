<?php

namespace App\Exceptions;

use Exception;

class StateMismatchException extends Exception
{
    public function __construct($message = null, $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
