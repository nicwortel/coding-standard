<?php

declare(strict_types=1);

namespace Foo;

class Bar
{
    #[Attribute] private string $foo;

    #[Attribute1] #[Attribute2]
    private bool $bar;
}
