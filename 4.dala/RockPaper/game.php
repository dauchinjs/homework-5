<?php

class Game {
    private Element $player;
    private Element $computer;

    public function __construct($player, $computer) {
        $this->player = $player;
        $this->computer = $computer;
    }

    public function getWinner(): ?Element {
        if($this->player->getName() === $this->computer->getName()) {
            return null;
        }

        if($this->player->getBeats($this->computer)) {
            return $this->player;
        }
        return $this->computer;
    }
}