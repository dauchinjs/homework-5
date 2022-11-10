<?php

require_once 'Video.php';
require_once 'VideoStore.php';

$movie1 = new Video("The Matrix");
$movie2 = new Video("Godfather II");
$movie3 = new Video("Star Wars Episode IV: A New Hope");

$movie1->receiveRating(10);
$movie2->receiveRating(6);
$movie3->receiveRating(7);

$addMovie = new VideoStore();
$addMovie->addToInventory($movie1);
$addMovie->addToInventory($movie2);
$addMovie->addToInventory($movie3);

$addMovie->checkOut($movie1);
$addMovie->checkOut($movie2);
$addMovie->checkOut($movie3);

$addMovie->returnVideo($movie1);
$addMovie->returnVideo($movie3);

echo $addMovie->listTheInventory();
echo PHP_EOL;








