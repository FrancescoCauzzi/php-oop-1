<?php
class Movie
{
    // Instance variables
    public $title;
    public $genres;
    public $year;
    public $length;

    // Class constructor
    function __construct(string $title, array $genres, string $year, float $length)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
        $this->length = $length;
    }
}
