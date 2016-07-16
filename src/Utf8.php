<?php

namespace Monolyth\Plumber;

abstract class Utf8
{
    /**
     * Required to make PHP handle UTF8 in a sane way. To use, simply include
     * somewhere early in your front controller (typically index.php).
     *
     * @return void
     */
    public static function handle()
    {
        mb_internal_encoding('UTF-8');
        mb_detect_order([
            'CP1251', 'CP1252', 'ISO-8859-1', 'UTF-8',
        ]);
    }
}

