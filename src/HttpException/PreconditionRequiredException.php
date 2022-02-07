<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class PreconditionRequiredException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_PRECONDITION_REQUIRED;
}
