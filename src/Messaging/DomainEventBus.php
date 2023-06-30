<?php

declare(strict_types=1);

namespace Termyn\Ddd\Messaging;

use Termyn\Ddd\DomainEvent;

/**
 * @deprecated since v0.2.0
 */
interface DomainEventBus
{
    public function publish(
        DomainEvent ...$domainEvents
    ): void;
}
