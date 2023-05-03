<?php
class Movie
{
    // Instance variables
    public $title;
    public $genres;
    public $year;

    // Class constructor
    function __construct($title, $genres, $year)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
    }

    // Metodo della classe
    public function printDetails()
    {
        // print the title
        echo "<p>Title: " . $this->title . "</p>";

        // print the element of the array of strings on the page
        echo "<p>";
        if (count($this->genres) == 1) {
            echo "Genre: " . $this->genres[0];
        } else {
            echo "Genres: ";
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
        echo "<p>Year: " . $this->year . "</p>";
    }
}

// Istanziazione dei due oggetti Movie
$movie1 = new Movie("The Godfather", ["Crime", "Thriller"], 1972);
$movie2 = new Movie("Forrest Gump", ["Drama", "Comedy"], 1994);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-2">
        <h1>Movies</h1>
        <?php
        // Stampa a schermo dei valori delle proprietà del primo oggetto
        echo "<h3>Movie 1 details:</h3>";
        $movie1->printDetails();

        // Stampa a schermo dei valori delle proprietà del secondo oggetto
        echo "<h3>Movie 2 details:</h3>";

        $movie2->printDetails();

        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>