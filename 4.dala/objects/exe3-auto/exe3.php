<?php

require_once 'odometer.php';
require_once 'fuelGauge.php';

$fuelGauge = new FuelGauge(10);
$odometer = new Odometer(999990);

while ($fuelGauge->getAmount() > 0) {
    //brauc
    //echo "We drove 1km" . PHP_EOL;
    echo "Fuel gauge: {$fuelGauge->getAmount()} | Odometer: {$odometer->getMileage()}";
    echo PHP_EOL;

    $odometer->increment();

    if($odometer->getMileage() === 999999) {
        $odometer->resetMileage();
    }
    if($odometer->getMileage() % 10 === 0) {
        $fuelGauge->use(1);
    }
    if($fuelGauge->getAmount() === 0) {
        echo "Fuel filled up";
        echo PHP_EOL;
        $fuelGauge->fill();
    }


    sleep(1);
}