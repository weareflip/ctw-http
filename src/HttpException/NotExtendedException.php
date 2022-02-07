<?php
declare(strict_types=1);

namespace Ctw\Http\HttpException;

use Ctw\Http\HttpStatus;

class NotExtendedException extends AbstractServerErrorException
{
    protected $statusCode = HttpStatus::STATUS_NOT_EXTENDED;
}
