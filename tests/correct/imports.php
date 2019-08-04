<?php
declare(strict_types=1);

namespace Foo;

use DateTime;
use function array_filter;
use const PHP_VERSION;

$now = new DateTime();

$array = array_filter([1, 2, 3]);

$version = PHP_VERSION;
