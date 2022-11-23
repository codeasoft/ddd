<?php

declare(strict_types=1);

namespace Termyn\Ddd;

interface DomainFailure
{
    public function code(): int;

    public function message(): string;
}