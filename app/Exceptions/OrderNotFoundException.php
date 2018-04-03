<?php

namespace App\Exceptions;

use Exception;

class OrderNotFoundException extends Exception
{
    public function __construct($orderId)
    {
        return parent::__construct("Order with id {$orderId} not found");
    }
}
