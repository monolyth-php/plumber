<?php

namespace Monolyth\Plumber;

abstract class Normalize
{
    public static function requestVariables()
    {
        array_walk($_GET, [__CLASS__, 'normalize']);
        array_walk($_POST, [__CLASS__, 'normalize']);
    }

    private static function normalize(&$val)
    {
        if (is_array($val)) {
            array_walk($val, [__CLASS__, 'normalize']);
        } elseif (is_scalar($val)) {
            $val = strlen($val) ? $val : null;
        }
    }
}

