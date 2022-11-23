<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use DomainException;

final class ValueIsNotValid extends DomainException implements DomainFailure
{
    public function __construct(
        string $statement,
    ) {
        parent::__construct(
            message: $statement,
            code: 0,
        );
    }

    public function code(): int
    {
        return $this->getCode();
    }

    public function message(): string
    {
        return $this->getMessage();
    }
}
