<?php
class MovieMinutesToHours extends Movie
{
    public static function convertToHoursAndMinutes($length)
    {
        $hours = floor($length / 60);
        $remainingMinutes = $length % 60;
        return "{$hours}h {$remainingMinutes}m";
    }
}
