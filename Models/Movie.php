<?php
// Define a class called "Movie"
class Movie {
    // Define public properties for the movie
    public $title;
    public $director;
    public $yearReleased;
    public $genres;

    // Define a constructor function that accepts arguments for the movie's properties and sets them on the object
    public function __construct(string $title, string $director, int $yearReleased, array $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->yearReleased = $yearReleased;
        $this->genres = $genres;
    }
}
?>

