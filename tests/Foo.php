<?php
declare(strict_types=1);

namespace Foo;

use DateTime;

final class Foo
{
    private const NOW = 'now';

    public function getCurrentDate(): DateTime
    {
        return new DateTime(self::NOW);
    }
}
