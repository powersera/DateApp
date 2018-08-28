<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * Class UnknownRoleException
 * @package App\Exceptions
 */
class UnknownRoleException extends MainException
{
    public function __construct($message = "", $code = Response::HTTP_CONFLICT, Throwable $previous = null)
    {
        if (empty($message)) {
            $message = 'Unknown role was provided';
        }
        parent::__construct($message, $code, $previous);
    }
}
