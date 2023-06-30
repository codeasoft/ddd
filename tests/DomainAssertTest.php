<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test;

use PHPUnit\Framework\TestCase;
use Termyn\Ddd\DomainAssert;
use Termyn\Ddd\DomainException;

/**
 * @deprecated since v0.2.0
 */
final class DomainAssertTest extends TestCase
{
    public function testItThrowsDomainException(): void
    {
        $this->expectException(DomainException::class);

        DomainAssert::isEmpty(1);
    }

    public function testItReturnsErrorMessage(): void
    {
        $this->expectExceptionMessage(
            $expectedMessage = 'Value is not empty'
        );

        DomainAssert::isEmpty(1, $expectedMessage);
    }
}
