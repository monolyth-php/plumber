<?php

namespace Monolyth\Plumber;

abstract class Normalize
{
    /**
     * Normalizes the GET/POST superglobals. All fields passed as empty strings
     * (i.e., not filled by user) are set to `null`.
     *
     * @return void
     */
    public static function requestVariables() : void
    {
        array_walk($_GET, [__CLASS__, 'normalize']);
        array_walk($_POST, [__CLASS__, 'normalize']);
    }

    /**
     * Internal helper to recursively normalize a value.
     *
     * @param mixed &$val
     * @return void
     */
    private static function normalize(&$val) : void
    {
        if (is_array($val)) {
            array_walk($val, [__CLASS__, 'normalize']);
        } elseif (is_scalar($val)) {
            $val = strlen($val) ? $val : null;
        }
    }
}

