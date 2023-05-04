<?php
class MovieHTMLHelper extends Movie
{
    public static function printDetails($movie)
    {
        // print the title
        echo "<p><strong>Title: </strong>" . $movie->title . "</p>";

        // print the element of the array of strings on the page
        echo "<p>";
        if (count($movie->genres) == 1) {
            echo "<strong>Genre: </strong>" . $movie->genres[0];
        } else {
            echo "<strong>Genres: </strong>";
            foreach ($movie->genres as $key => $genre) {
                if ($key == count($movie->genres) - 1) {
                    echo $genre . ". ";
                } else {
                    echo $genre . ", ";
                }
            }
        }
        echo "</p>";

        // print the year
        echo "<p><strong>Year: </strong>" . $movie->year . "</p>";
        // print the length 
        echo "<p><strong>Length: </strong>" . MovieMinutesToHours::convertToHoursAndMinutes($movie->length) . "</p>";
    }
}
