<?php

require_once 'elements.php';
require_once 'game.php';

$rock = new Element('Rock');
$paper = new Element('Paper');
$scissors = new Element('Scissors');
$lizard = new Element('Lizard');
$spock = new Element('Spock');

$rock->setBeats($scissors);
$rock->setBeats($lizard);

$paper->setBeats($rock);
$paper->setBeats($spock);

$scissors->setBeats($paper);
$scissors->setBeats($lizard);

$lizard->setBeats($paper);
$lizard->setBeats($spock);

$spock->setBeats($rock);
$spock->setBeats($scissors);

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock,
];

foreach($elements as $key => $element) {
    echo "[{$key}] {$element->getName()}" . PHP_EOL;
}

echo "Enter choice: ";
$selectedElement = null;

while($selectedElement === null) {
    $selection = readline();
    if($selection > count($elements) - 1 || $selection < 0) {
        echo "Invalid selection ";
    } else {
        $selectedElement = $elements[$selection];
    }
}
$opponentElement = $elements[array_rand($elements)];


$game = new Game($selectedElement, $opponentElement);
$winner = $game->getWinner();

echo $selectedElement->getName() . ' VS ' . $opponentElement->getName();
echo PHP_EOL;

if($winner === null) {
    echo "It's a tie!" . PHP_EOL;
    exit;
}
if($winner === $selectedElement) {
    echo "Player wins!";
    echo PHP_EOL;
    exit;
}

if($winner === $opponentElement) {
    echo "Computer wins!";
    echo PHP_EOL;
    exit;
}
