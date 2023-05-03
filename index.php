<?php
class Movie
{
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $year;

    // Costruttore della classe
    function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Metodo della classe
    function printDetails()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Genre: " . $this->genre . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Istanziazione dei due oggetti Movie
$movie1 = new Movie("The Godfather", "Crime", 1972);
$movie2 = new Movie("Forrest Gump", "Drama", 1994);

// Stampa a schermo dei valori delle proprietà del primo oggetto
echo "Movie 1 details:<br>";
$movie1->printDetails();

// Stampa a schermo dei valori delle proprietà del secondo oggetto
echo "Movie 2 details:<br>";
$movie2->printDetails();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>