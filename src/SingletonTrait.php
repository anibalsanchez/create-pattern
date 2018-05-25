<?php

/*
* Copyright (C) 2016 Andrea Gentil & Anibal Sanchez, Extly CB.
*                    Email: team[at]extly.com
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* License  http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
*
*/

namespace Extly\Infrastructure\Creator;

use ReflectionClass;

trait SingletonTrait
{
    private static $instance = null;

    final public static function getInstance()
    {
        if (!is_null(self::$instance)) {
            return self::$instance;
        }

        $class = get_called_class();
        $args = func_get_args();
        $reflect  = new ReflectionClass($class);
        self::$instance = $reflect->newInstanceArgs($args);

        return self::$instance;
    }
}
