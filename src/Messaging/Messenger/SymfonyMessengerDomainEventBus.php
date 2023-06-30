<?php

declare(strict_types=1);

namespace Termyn\Ddd\Messaging\Messenger;

use Symfony\Component\Messenger\MessageBusInterface as MessageBus;
use Termyn\Ddd\DomainEvent;
use Termyn\Ddd\Messaging\DomainEventBus;

/**
 * @deprecated since v0.2.0
 */
final class SymfonyMessengerDomainEventBus implements DomainEventBus
{
    public function __construct(
        private readonly MessageBus $messageBus,
    ) {

    }

    public function publish(
        DomainEvent ...$domainEvents
    ): void {
        foreach ($domainEvents as $domainEvent) {
            $this->messageBus->dispatch($domainEvent);
        }
    }
}
