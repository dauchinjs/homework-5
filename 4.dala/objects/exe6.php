<?php

class EnergyDrinks {
    public int $surveyed = 12467;
    public float $purchasedEnergyDrinks = 0.14;
    public float $preferCitrusDrinks = 0.64;

    public function __construct($surveyed, $purchasedEnergyDrinks, $preferCitrusDrinks) {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;
    }

    public function energyDrinks() {
        $boughtEnergy = $this->surveyed * $this->purchasedEnergyDrinks;
        return floor($boughtEnergy);
    }

    public function citrusDrinks() {
        $preferCitrus = $this->surveyed * $this->purchasedEnergyDrinks * $this->preferCitrusDrinks;
        return floor($preferCitrus);
    }

}
$aboutEnergyDrinks = new EnergyDrinks(12467, 0.14, 0.64);
echo "Total number of people surveyed: " . $aboutEnergyDrinks->surveyed;
echo PHP_EOL;
echo "Approximately " . $aboutEnergyDrinks->energyDrinks() . " people bought at least one energy drink.";
echo PHP_EOL;
echo $aboutEnergyDrinks->citrusDrinks() . " of those " . $aboutEnergyDrinks->energyDrinks() .
    " prefer citrus flavoured energy drinks.";
echo PHP_EOL;
