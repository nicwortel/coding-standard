<?php

declare(strict_types=1);

namespace Foo;

class Foo
{
    private const FOO = 'foo';
    private const BAR = 'bar';
    private string $foo = 'foo';
    private string $bar = 'bar';
    public function foo(): string
    {
        return $this->foo;
    }
    public function bar(): string
    {
        return $this->bar;
    }
}
