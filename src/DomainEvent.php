<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use Termyn\DateTime\Instant;

interface DomainEvent
{
    /**
     * @deprecated since v0.2.0
     */
    public function occurredAt(): Instant;
}
