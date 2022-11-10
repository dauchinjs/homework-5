<?php

class Video {
    private string $title;
    private bool $inStorage;
    private array $rating;

    public function __construct(string $title, bool $inStorage = false, array $rating = []) {
        $this->title = $title;
        $this->inStorage = $inStorage;
        $this->rating = $rating;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getRating(): array {
        return $this->rating;
    }

    public function getInStorage(): bool {
        return $this->inStorage;
    }

    public function checkOut(): bool {
        return $this->inStorage = true;
    }

    public function returnVideo(): bool {
        return $this->inStorage = false;
    }

    public function receiveRating(float $rating): void {
        $this->rating[] = $rating;
    }
}