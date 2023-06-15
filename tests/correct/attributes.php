<?php

declare(strict_types=1);

namespace Foo;

class Bar
{
    #[Attribute1]
    #[Attribute2]
    private string $foo;
}
