<?php

declare(strict_types=1);

namespace Termyn\Ddd\Messaging;

use Termyn\Ddd\DomainEvent;

interface DomainEventBus
{
    public function publish(
        DomainEvent ...$domainEvents
    ): void;
}
