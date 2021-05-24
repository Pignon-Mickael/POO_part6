<?php

class Speedometer
{
    public const MILES_CONVERSION = 0.621 ;

    public static function convertKmToMiles(float $km): ?float
    {
        return $km * self::MILES_CONVERSION;
    }

    public static function convertMilesToKm(float $miles): ?float
    {
        return $miles / self::MILES_CONVERSION;
    }
}