<?php declare(strict_types=1);

    namespace STDW\Support;


    class Arr
    {
        public static function kshift(array &$collection): array|null
        {
            if ( ! count($collection)) {
                return null;
            }

            $key = array_key_first($collection);
            $item = array($key => $collection[$key]);

            unset($collection[$key]);

            return $item;
        }

        public static function kpop(array &$collection): array|null
        {
            if ( ! count($collection)) {
                return null;
            }

            $key = array_key_last($collection);
            $item = array($key => $collection[$key]);

            unset($collection[$key]);

            return $item;
        }

        public static function grab(string|int $key, array &$collection): mixed
        {
            if ( ! array_key_exists($key, $collection)) {
                return null;
            }

            $item = $collection[$key];

            unset($collection[$key]);

            return $item;
        }

        public static function wrap(mixed $item): array
        {
            if (Str::empty($item)) {
                return [];
            }

            return ( ! is_array($item)) ? [$item] : $item;
        }
    }