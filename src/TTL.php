<?php declare(strict_types=1);

    namespace STDW\Support;


    final class TTL
    {
        const
            NONE = 0,
            SECOND = 1,
            MINUTE = self::SECOND * 60,
            HOUR = self::MINUTE * 60,
            DAY = self::HOUR * 24,
            WEEK = self::DAY * 7,
            MONTH = self::DAY * 30,
            YEAR = self::DAY * 365,
            FOREVER = PHP_INT_MAX;


        public static function seconds(int $seconds): int
        {
            return self::SECOND * $seconds;
        }

        public static function minutes(int $minutes): int
        {
            return self::MINUTE * $minutes;
        }

        public static function hours(int $hours): int
        {
            return self::HOUR * $hours;
        }

        public static function days(int $days): int
        {
            return self::DAY * $days;
        }

        public static function weeks(int $weeks): int
        {
            return self::WEEK * $weeks;
        }

        public static function months(int $months): int
        {
            return self::MONTH * $months;
        }

        public static function years(int $years): int
        {
            return self::YEAR * $years;
        }

        public static function forever(): int
        {
            return self::FOREVER;
        }
    }