<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test;

use PHPUnit\Framework\TestCase;
use Termyn\Ddd\DomainException;

final class DomainExceptionTest extends TestCase
{
    private const MESSAGE = 'Value is not valid';

    private const CODE = 400;

    public function testItReturnsMessage(): void
    {
        $failure = new DomainException(self::MESSAGE, self::CODE);

        $this->assertSame(self::MESSAGE, $failure->message());
        $this->assertSame(self::CODE, $failure->code());
    }
}
