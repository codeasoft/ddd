<?php

declare(strict_types=1);

namespace Termyn\Ddd;

final class ValueIsNotValid extends DomainException
{
    public function __construct(
        string $statement,
    ) {
        parent::__construct(
            message: $statement,
            code: 0,
        );
    }
}
