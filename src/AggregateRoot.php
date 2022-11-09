<?php

declare(strict_types=1);

namespace Codea\Ddd;

interface AggregateRoot
{
    public function domainEvents(): array;
}
