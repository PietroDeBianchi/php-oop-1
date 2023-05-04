<?php

require  __DIR__ . '/Models/Movie.php';

$movie1 = new Movie("I Simposon: Il Film", "Homer Simpson", 2012, ["Commedy", "Adventure"]);
$movie2 = new Movie("I Goonies", "Chunk!", 1984, ["Commedy", "Thriller"]);
$movie3 = new Movie("Lord of the Ring", "Peter Jackson", 2001, ["Action", "Adventure", "Fantasy"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Movie list</title>
</head>
<body>
    <main>
        <h1>List of Movies</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Year Released</th>
                    <th>Genres</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   // Create an array of movie objects
                    $movies = [$movie1, $movie2, $movie3];
                    // Loop through each movie object in the array and output its properties as a table row
                    foreach ($movies as $movie) {
                        echo "<tr>";
                        echo "<td>" . $movie->title . "</td>";
                        echo "<td>" . $movie->director . "</td>";
                        echo "<td>" . $movie->yearReleased . "</td>";
                        echo "<td>" . implode(", ", $movie->genres) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    <main>
</body>
</html>