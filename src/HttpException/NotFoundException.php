<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class NotFoundException extends AbstractClientErrorException
{
    protected $statusCode = HttpStatus::STATUS_NOT_FOUND;
}
