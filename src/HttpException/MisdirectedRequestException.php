<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class MisdirectedRequestException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_MISDIRECTED_REQUEST;
}
