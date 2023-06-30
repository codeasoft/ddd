<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test;

use PHPUnit\Framework\TestCase;
use Termyn\Ddd\DomainEvent;
use Termyn\Ddd\DomainEventOccurrence;

final class DomainEventOccurrenceTest extends TestCase
{
    public function testItCollectsDomainEvents(): void
    {
        $domainEvents = $this->provideDomainEvents();
        $aggregate = new class() {
            use DomainEventOccurrence;

            public function doChange(DomainEvent ...$domainEvents): void
            {
                $this->occur(...$domainEvents);
            }
        };

        $aggregate->doChange(...$domainEvents);

        $this->assertCount(count($domainEvents), $aggregate->domainEvents());
    }

    private function provideDomainEvents(): array
    {
        $domainEvent = $this->createMock(DomainEvent::class);

        return array_fill(0, 2, $domainEvent);
    }
}
