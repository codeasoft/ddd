<?php

declare(strict_types=1);

namespace Codea\Ddd\Test\Messaging\Messenger;

use Codea\Ddd\DomainEvent;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface as MessageBus;

final class FakeMessageBus implements MessageBus
{
    public array $messages = [];

    public function dispatch(object $message, array $stamps = []): Envelope
    {
        if ($message instanceof DomainEvent) {
            $this->messages[] = $message;
        }

        return new Envelope($message, $stamps);
    }
}
