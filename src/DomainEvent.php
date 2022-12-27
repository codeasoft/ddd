<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use Termyn\DateTime\Instant;

interface DomainEvent
{
    public function occurredAt(): Instant;
}
