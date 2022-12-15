<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use Exception;

class DomainException extends Exception
{
    public function __construct(
        string $message,
        int $code = 0
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
