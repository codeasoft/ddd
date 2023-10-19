<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Termyn\Ddd\AggregateNotFound;

final class AggregateNotFoundExceptionTest extends TestCase
{
    #[Test]
    public function shouldContainValidMessage(): void
    {
        $expected = vsprintf('Aggregate of type %s for ID %s not found.', [
            $id = '123',
            $class = 'TestAggragate',
        ]);

        $exception = new AggregateNotFound($id, $class);

        $this->assertSame($expected, $exception->getMessage());
    }
}
