<?php
declare(strict_types=1);

namespace CtwTest\Http\HttpException;

use Ctw\Http\HttpException;
use Ctw\Http\HttpStatus;

// phpcs:disable

class NotFoundExceptionTest extends AbstractCase
{
    public function testNotFoundException(): void
    {
        $message = '404 Not Found';

        try {
            throw new HttpException\NotFoundException();
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame(404, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
        }
    }

    public function testNotFoundExceptionWithConstructorValues(): void
    {
        $message = 'Custom error message with a detailed description of the problem.';
        $headers = [
            'Content-Type'  => 'text/html; charset=UTF-8',
            'Authorization' => 'Basic YWxhZGRpbjpvcGVuc2VzYW1l',
        ];

        try {
            throw new HttpException\NotFoundException($message, null, $headers);
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame(404, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
            $this->assertSame($headers, $e->getHeaders());
        }
    }
}

// phpcs:disable
