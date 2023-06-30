<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test\Messaging\Messenger;

use PHPUnit\Framework\TestCase;
use Termyn\Ddd\DomainEvent;
use Termyn\Ddd\Messaging\Messenger\SymfonyMessengerDomainEventBus;

/**
 * @deprecated since v0.2.0
 */
final class SymfonyMessengerDomainEventBusTest extends TestCase
{
    /**
     * @dataProvider provideDomainEvents
     */
    public function testItPublishesDomainEvents(
        array $domainEvents,
        int $numberOfDomainEvents
    ): void {
        $domainEventBus = new SymfonyMessengerDomainEventBus(
            $fakeMessageBus = new FakeMessageBus()
        );

        $domainEventBus->publish(...$domainEvents);

        $this->assertCount(
            expectedCount: $numberOfDomainEvents,
            haystack: $fakeMessageBus->dispatchedMessages()
        );
    }

    public function provideDomainEvents(): iterable
    {
        $domainEvent = $this->createMock(DomainEvent::class);

        for ($count = 1; $count <= 3; ++$count) {
            yield [
                'domainEvents' => array_fill(0, $count, $domainEvent),
                'numberOfDomainEvents' => $count,
            ];
        }
    }
}
