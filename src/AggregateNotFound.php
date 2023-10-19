<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use RuntimeException;
use Stringable;

final class AggregateNotFound extends RuntimeException
{
    public function __construct(Stringable|string|int $id, string $type)
    {
        parent::__construct(
            sprintf('Aggregate of type %s for ID %s not found.', $id, $type)
        );
    }
}
