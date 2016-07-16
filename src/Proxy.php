<?php

namespace Monolyth\Plumber;

abstract class Proxy
{
    /**
     * Correct REMOTE_ADDR if we're behind a proxy.
     * This code is by no means extensive; there's prolly 1.000 other
     * cases you'll want to handle. Roll your own in that case.
     *
     * @return void
     */
    public static function handle()
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $_SERVER['REMOTE_ADDR'] = trim(array_shift(explode(
                ',',
                $_SERVER['HTTP_X_FORWARDED_FOR']
            )));
        }
    }
}

