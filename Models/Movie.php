<?php
class Movie
{
    // Instance variables
    public $title;
    public $genres;
    public $year;

    // Class constructor
    function __construct(string $title, array $genres, string $year)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
    }
}
