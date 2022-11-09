<?php

declare(strict_types=1);

namespace Codea\Ddd;

interface DomainError
{
    public function code(): int;

    public function message(): string;
}
