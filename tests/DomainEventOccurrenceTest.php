<?php

declare(strict_types=1);

namespace Codea\Ddd\Test;

use Codea\Ddd\DomainEvent;
use Codea\Ddd\DomainEventOccurrence;
use PHPUnit\Framework\TestCase;

final class DomainEventOccurrenceTest extends TestCase
{
    /**
     * @dataProvider provideDomainEvents
     */
    public function testItCollectsDomainEvents(array $domainEvents): void
    {
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

    public function provideDomainEvents(): iterable
    {
        $domainEvent = $this->createMock(DomainEvent::class);
        $testCases = [
            'one' => [
                $domainEvent,
            ],
            'two' => [
                $domainEvent,
                $domainEvent,
            ],
        ];

        foreach ($testCases as $useCase => $domainEvents) {
            yield $useCase => [
                'domainEvents' => $domainEvents,
            ];
        }
    }
}
