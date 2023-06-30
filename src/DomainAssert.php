<?php

declare(strict_types=1);

namespace Termyn\Ddd;

use Webmozart\Assert\Assert;

/**
 * @deprecated since v0.2.0
 */
final class DomainAssert extends Assert
{
    protected static function reportInvalidArgument($message)
    {
        throw new DomainException($message);
    }
}
