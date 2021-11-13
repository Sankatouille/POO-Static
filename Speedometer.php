<?php


class Speedometer
{
    const convert = 0.621;

    public static function convertKmToMiles($km)
    {
        return $km * self::convert;
    }

    public static function convertMilesToKm($mile)
    {
        return $mile / self::convert;
    }
}