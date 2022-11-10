<?php

class Odometer {

    private int $mileage = 0;

    public function __construct(int $mileage) {
        $this->mileage = $mileage;
    }

    public function getMileage(): int {
        return $this->mileage;
    }
    public function resetMileage(): int {
        if($this->mileage === 999999) {
            $this->mileage = 0;
        }
        return $this->mileage;
    }

    public function increment(int $amount = 1): void {

        if($amount < 0) return; //don't allow Rumbula

        $this->mileage += $amount;
    }
}