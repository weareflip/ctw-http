<?php
declare(strict_types=1);

namespace CtwTest\Http\HttpException;

use Ctw\Http\HttpException;
use Ctw\Http\HttpStatus;

// phpcs:disable

class NotExtendedExceptionTest extends AbstractCase
{
    public function testNotExtendedException(): void
    {
        $message = '510 Not Extended';

        try {
            throw new HttpException\NotExtendedException();
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame(510, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
        }
    }

    public function testNotExtendedExceptionWithConstructorValues(): void
    {
        $message = 'Custom error message with a detailed description of the problem.';
        $headers = [
            'Content-Type'  => 'text/html; charset=UTF-8',
            'Authorization' => 'Basic YWxhZGRpbjpvcGVuc2VzYW1l',
        ];

        try {
            throw new HttpException\NotExtendedException($message, null, $headers);
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame(510, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
            $this->assertSame($headers, $e->getHeaders());
        }
    }
}

// phpcs:disable
