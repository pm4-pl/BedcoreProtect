<?php

namespace Time\Unit;

class TimeUnitNanosecond extends TimeUnit implements TimeUnitNanosecondsInterface
{
    /**
     * @param int $timeout
     */
    public static function sleep($timeout)
    {
        self::sleepFor(0, self::toNanos($timeout));
    }

    /**
     * @param int $delay
     * @return int
     */
    public static function toNanos($delay)
    {
        return $delay;
    }
}