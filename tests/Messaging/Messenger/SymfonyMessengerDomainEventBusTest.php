<?php

declare(strict_types=1);

namespace Codea\Ddd\Test\Messaging\Messenger;

use Codea\Ddd\DomainEvent;
use Codea\Ddd\Messaging\Messenger\SymfonyMessengerDomainEventBus;
use PHPUnit\Framework\TestCase;

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
