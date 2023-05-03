<?php
    class Movie {
        // Dichiaro le proprietà della classe
        public $title;
        public $director;
        public $releaseYear;
        public $actors = [];
        public $genres = [];
        public $overview;

        // Costruttore della classe
        function __construct(string $title, string $director, int $releaseYear, array $actors, array $genres, string $overview) {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
            $this->actors = $actors;
            $this->genres = $genres;
            $this->overview = $overview;
        }

        public function getGenres($genres) {
            return implode(" , ",$genres);
        }

        public function getActors($actors) {
            return implode (" , ",$actors);
        }
    }