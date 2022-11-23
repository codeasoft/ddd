<?php

declare(strict_types=1);

namespace Termyn\Ddd;

interface AggregateRoot
{
    /**
     * @return array<int|string, DomainEvent>
     */
    public function domainEvents(): array;
}
