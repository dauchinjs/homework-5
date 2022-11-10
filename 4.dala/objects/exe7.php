<?php



class Dogs {
    public string $dogName;
    public string $sex;
    public string $mother;
    public string $father;

    public function __construct($dogName, $sex, $mother, $father = "Unknown") {
        $this->dogName = $dogName;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }
    public function fathersName(): string {
        return $this->father;
    }
    public function hasSameMother($dog, $otherDog) {
        if($dog->mother != $otherDog->mother) {
            return false;
        } else {
            return true;
        }
    }
}

class DogTest extends Dogs {

    public function testDogs(): string {
        return "$this->dogName has $this->mother as mother, and $this->father as father";
    }
}
$dog = new DogTest("Max", "male", "Lady");
echo $dog->testDogs() . PHP_EOL;
echo $dog->fathersName() . PHP_EOL;
$otherDog = new DogTest("Buster", "male", "Molly", "Sparky");
echo $otherDog->hasSameMother($dog, $otherDog) . PHP_EOL;