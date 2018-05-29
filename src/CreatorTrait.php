<?php

/**
 * anibalsanchez/create-pattern
 * A lightweight PHP implementation of the Static Create Pattern using a trait.
 *
 * @author     Andrea Gentil & Anibal Sanchez <team[at]extly.com>
 * @copyright  Copyright (C) 2018 Andrea Gentil & Anibal Sanchez, Extly CB.
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Extly\Infrastructure\Creator;

use ReflectionClass;

trait CreatorTrait
{
    final public static function create()
    {
        $class = get_called_class();
        $args = func_get_args();
        $reflect  = new ReflectionClass($class);

        return $reflect->newInstanceArgs($args);
    }
}
