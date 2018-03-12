<?php declare(strict_types = 1);

namespace Foo;

use SplFileInfo;
use \DateTime;

/**
 * @author Me
 * @version 1.2.3
 * @created 01-01-2018
 * @copyright Foo Bar
 * @package Foo.Bar
 * @license MIT
 */
final class Bar
{
    const NOW = 'now';

    /**
     * @param null|string $time
     * @param string|null $timezone
     *
     * @return \DateTime
     */
    public function getCurrentDate(? string $time, string $timezone = null) : DateTime
    {
        return new \DateTime($time);
    }

    /**
     * @param boolean $flag
     *
     * @return integer[]
     */
    public function fooBar(bool $flag): array
    {
        if (true == $flag) {
            return [
                1,
                2,
                3,
                PHP_VERSION
            ];
        }

        return array_filter(array(1,2,3));
    }
}
