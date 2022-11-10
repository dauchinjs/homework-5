<?php

class Movie {
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getRating():string {
        return $this->rating;
    }

    public function printMovie(): string {
        return "Movie title '$this->title', the studio '$this->studio', the rating '$this->rating'";
    }

    public static function GetPG(array $movies): array {
        $filteredMovies = [];
        foreach($movies as $movie) {
            if($movie->getRating() === 'PG') {
                $filteredMovies[] = $movie;
            }
        }
        return $filteredMovies;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),

    new Movie("Glass", "Buena Vista International", "PG13"),

    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

$movie = $movies[0];
$moviesPG = Movie::GetPG($movies);
var_dump($moviesPG);