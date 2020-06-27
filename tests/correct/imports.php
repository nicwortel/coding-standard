<?php

declare(strict_types=1);

namespace Foo;

use DateTime;
use DateTimeZone;

use function array_filter;

use const PHP_VERSION;

$now = new DateTime('now', new DateTimeZone('Europe/Amsterdam'));

$array = array_filter([1, 2, 3]);

$version = PHP_VERSION;
