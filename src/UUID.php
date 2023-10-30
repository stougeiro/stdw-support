<?php declare(strict_types=1);

    namespace STDW\Support;


    class UUID
    {
        public static function v4(): string
        {
            $version = 4;
            $string = str_split(bin2hex(random_bytes(16)), 4);

            return sprintf("%08s-%04s-{$version}%03s-%04x-%012s",
                $string[0] . $string[1], $string[2],
                substr($string[3], 1, 3),
                hexdec($string[4]) & 0x3fff | 0x8000,
                $string[5] . $string[6] . $string[7]
            );
        }
    }