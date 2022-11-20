<?php

declare(strict_types=1);

namespace Termyn\Ddd;

interface AggregateRoot
{
    public function domainEvents(): array;
}
