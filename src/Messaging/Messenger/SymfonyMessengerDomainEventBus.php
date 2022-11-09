<?php

declare(strict_types=1);

namespace Codea\Ddd\Messaging\Messenger;

use Codea\Ddd\DomainEvent;
use Codea\Ddd\Messaging\DomainEventBus;
use Symfony\Component\Messenger\MessageBusInterface as MessageBus;

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
