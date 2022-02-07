<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class UnprocessableEntityException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_UNPROCESSABLE_ENTITY;
}
