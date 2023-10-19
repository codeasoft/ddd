<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use RuntimeException;
use Termyn\Id;

final class AggregateNotFound extends RuntimeException
{
    public function __construct(Id $id, string $entity)
    {
        parent::__construct(
            sprintf('Aggregate of type %s for ID %s not found.', $id, $entity)
        );
    }
}
