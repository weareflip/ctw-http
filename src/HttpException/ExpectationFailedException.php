<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class ExpectationFailedException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_EXPECTATION_FAILED;
}
