<?php

declare(strict_types=1);

namespace Codea\Ddd\Messaging;

use Codea\Ddd\DomainEvent;

interface DomainEventBus
{
    public function publish(
        DomainEvent ...$domainEvents
    ): void;
}
