<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class PayloadTooLargeException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_PAYLOAD_TOO_LARGE;
}
