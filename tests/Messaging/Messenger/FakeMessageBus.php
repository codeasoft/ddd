<?php

declare(strict_types=1);

namespace Termyn\Ddd\Test\Messaging\Messenger;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface as MessageBus;
use Termyn\Ddd\DomainEvent;

final class FakeMessageBus implements MessageBus
{
    private array $dispatchedMessages = [];

    public function dispatch(object $message, array $stamps = []): Envelope
    {
        if ($message instanceof DomainEvent) {
            $this->dispatchedMessages[] = $message;
        }

        return new Envelope($message, $stamps);
    }

    public function dispatchedMessages(): array
    {
        return $this->dispatchedMessages;
    }
}
