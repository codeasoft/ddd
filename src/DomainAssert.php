<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use Webmozart\Assert\Assert;

final class DomainAssert extends Assert
{
    protected static function reportInvalidArgument($message)
    {
        throw new DomainException($message);
    }
}
