<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use DomainException;

abstract class DomainFailure extends DomainException
{
    public function __construct(
        string $message,
        int $code
    ) {
        parent::__construct($message, $code);
    }

    public function message(): string
    {
        return $this->getMessage();
    }

    public function code(): int
    {
        return $this->getCode();
    }
}
