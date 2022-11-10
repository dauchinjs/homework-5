<?php
require_once 'Video.php';

class VideoStore {
    private array $inventory;

    public function __construct(array $inventory = []) {
        $this->inventory = $inventory;
    }

    public function getInventory(): array {
        return $this->inventory;
    }

    public function addToInventory(Video $video): void {
        $this->inventory[] = $video;
    }

    public function checkOut(Video $video): bool {
        return $video->checkOut();
    }

    public function  returnVideo(Video $video): bool {
        return $video->returnVideo();
    }

    public function receiveRating(Video $video, float $rating): void {
        $video->receiveRating($rating);
    }

    public function averageRating(Video $video): float {
        return $averageRating = round((array_sum($video->getRating()) / count($video->getRating())), 2);
    }

    public function listTheInventory() {
        $inventory = $this->getInventory();
        foreach($inventory as $video) {
            echo $video->getTitle() . ", " . $this->averageRating($video) . ", ";
            if($video->getInStorage() === true) {
                return "checked out";
            }
                return "in storage";
            }
        }
}