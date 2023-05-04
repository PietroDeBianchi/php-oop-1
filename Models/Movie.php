<?php

class Movie {
    public $title;
    public $director;
    public $yearReleased;
    public $genres;

    public function __construct(string $title, string $director, int $yearReleased, array $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->yearReleased = $yearReleased;
        $this->genres = $genres;
    }

}
