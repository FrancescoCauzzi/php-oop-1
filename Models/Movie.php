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

    // Metodo della classe
    public function printDetails()
    {
        // print the title
        echo "<p><strong>Title: </strong>" . $this->title . "</p>";

        // print the element of the array of strings on the page
        echo "<p>";
        if (count($this->genres) == 1) {
            echo "<strong>Genre: </strong>" . $this->genres[0];
        } else {
            echo "<strong>Genres: </strong>";
            foreach ($this->genres as $key => $genre) {
                if ($key == count($this->genres) - 1) {
                    echo $genre . ". ";
                } else {
                    echo $genre . ", ";
                }
            }
        }
        echo "</p>";

        // print the year
        echo "<p><strong>Year: </strong>" . $this->year . "</p>";
    }
}
