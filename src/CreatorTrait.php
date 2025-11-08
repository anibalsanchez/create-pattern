<?php

/*
 * @package     anibalsanchez/create-pattern
 * @description A lightweight PHP implementation of the Static Create Pattern using a trait.
 *
 * @author      Extly, CB. <team@extly.com>
 * @copyright   Copyright (c)2012-2025 Extly, CB. All rights reserved.
 * @license     https://www.opensource.org/licenses/mit-license.html  MIT License
 *
 * @see         https://www.extly.com
 */

namespace Extly\Infrastructure\Creator;

trait CreatorTrait
{
    final public static function create(...$args)
    {
        $class = static::class;
        $reflectionClass = new \ReflectionClass($class);

        return $reflectionClass->newInstanceArgs($args);
    }
}
