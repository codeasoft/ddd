<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test;

use PHPUnit\Framework\TestCase;
use Termyn\Ddd\ValueIsNotValid;

final class ValueIsNotValidTest extends TestCase
{
    private const MESSAGE = 'ValueIsNotValid';

    public function testItReturnsMessage(): void
    {
        $failure = new ValueIsNotValid(self::MESSAGE);

        $this->assertSame(self::MESSAGE, $failure->message());
        $this->assertSame(0, $failure->code());
    }
}
