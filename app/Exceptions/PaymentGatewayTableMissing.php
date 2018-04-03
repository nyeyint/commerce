<?php 

namespace App\Exceptions;

class PaymentGatewayTableMissingException extends \Exception
{
    public function __construct($message = null, $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
