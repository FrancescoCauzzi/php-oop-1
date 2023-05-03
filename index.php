<?php

require_once './Models/Movie.php';
require_once './Models/MovieHTMLHelper.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body>
    <header>

        <?php
        include './Views/partials/header.php';
        ?>
    </header>
    <main>

        <div class="container py-4">
            <?php
            // Start the session
            session_start();

            // Include the db.php file
            require_once('db.php');

            // Assign the $movies variable to the $_SESSION variable
            $_SESSION['movies'] = $movies;

            // Output the movies
            foreach ($_SESSION['movies'] as $index => $movie) {
                echo "<h4>Movie " . $index + 1 . "</h4>";
                // Output the movie details with HTML markup using MovieHTMLHelper
                MovieHTMLHelper::printDetails($movie);
            }
            ?>

            <?php
            /*
            // Stampa a schermo dei valori delle proprietà del primo oggetto
            echo "<h3>Movie 1 details:</h3>";
            $movie1->printDetails();

            // Stampa a schermo dei valori delle proprietà del secondo oggetto
            echo "<h3>Movie 2 details:</h3>";

            $movie2->printDetails();
            */
            ?>
        </div>
    </main>
    <footer>
        <?php
        include './Views/partials/footer.php';
        ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>