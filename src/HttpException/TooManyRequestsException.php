<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class TooManyRequestsException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_TOO_MANY_REQUESTS;
}
