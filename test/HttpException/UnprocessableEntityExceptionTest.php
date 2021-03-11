<?php
declare(strict_types=1);

namespace CtwTest\Http\HttpException;

use Ctw\Http\HttpException;

// phpcs:disable

class UnprocessableEntityExceptionTest extends AbstractCase
{
    public function testUnprocessableEntityException(): void
    {
        $statusCode = 422;
        $message    = '422 Unprocessable Entity';

        try {
            throw new HttpException\UnprocessableEntityException();
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame($statusCode, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
        }
    }

    public function testUnprocessableEntityExceptionWithConstructorValues(): void
    {
        $statusCode = 422;
        $message    = 'Custom error message with a detailed description of the problem.';
        $headers    = [
            'Content-Type'  => 'text/html; charset=UTF-8',
            'Authorization' => 'Basic YWxhZGRpbjpvcGVuc2VzYW1l',
        ];

        try {
            throw new HttpException\UnprocessableEntityException($message, null, $headers);
        } catch (HttpException\HttpExceptionInterface $e) {
            $this->assertSame($statusCode, $e->getStatusCode());
            $this->assertSame($message, $e->getMessage());
            $this->assertSame($headers, $e->getHeaders());
        }
    }
}

// phpcs:disable
