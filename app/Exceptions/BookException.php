<?php

namespace App\Exceptions;

use Exception;

class BookException extends Exception
{
    protected $errorDetails;
    public function __construct($message = 'Book error', $code = 0, Exception $previous = null, $errorDetails = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errorDetails = $errorDetails;
    }

    public function getErrorDetails()
    {
        return $this->errorDetails;
    }
}
