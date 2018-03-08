<?php

namespace App\Exceptions;

use Exception;

class InvalidOrderStatusException extends Exception
{
    public function __construct($status) {
        return parent::__construct("Unallowed status messages [{$status}].");
    }
}
