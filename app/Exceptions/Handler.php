<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->json(['error' => $exception->validator->errors()], 400);
        }
    
        if ($exception instanceof UserException) {
            return response()->json(['error' => $exception->getMessage(), 'details' => $exception->getErrorDetails()], 400);
        }

        if ($exception instanceof BookException) {
            return response()->json(['error' => $exception->getMessage(), 'details' => $exception->getErrorDetails()], 400);
        }

        if ($exception instanceof ReviewException) {
            return response()->json(['error' => $exception->getMessage(), 'details' => $exception->getErrorDetails()], 400);
        }
    
        return parent::render($request, $exception);
    }
}
