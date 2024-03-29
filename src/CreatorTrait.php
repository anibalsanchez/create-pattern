<?php

/*
 * @package     anibalsanchez/create-pattern
 *               A lightweight PHP implementation of the Static Create Pattern using a trait.
 *
 * @author      Extly, CB. <team@extly.com>
 * @copyright   Copyright (c)2012-2022 Extly, CB. All rights reserved.
 * @license     https://www.opensource.org/licenses/mit-license.html  MIT License
 *
 * @see         https://www.extly.com
 */

namespace Extly\Infrastructure\Creator;

trait CreatorTrait
{
    final public static function create()
    {
        $class = static::class;
        $args = \func_get_args();
        $reflect = new \ReflectionClass($class);

        return $reflect->newInstanceArgs($args);
    }
}
