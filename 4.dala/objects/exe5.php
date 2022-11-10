<?php

class Date {
    private int $month = 11;
    private int $day = 7;
    private int $year = 2022;

    public function __construct($month, $day, $year) {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth(): int {
        return $this->month;
    }
    public function setMonth($month): int {
        return $this->month = $month;
    }

    public function getDay(): int {
        return $this->day;
    }
    public function setDay($day): int {
        return $this->day = $day;
    }

    public function getYear(): int {
        return $this->year;
    }
    public function setYear($year): int {
        return $this->year = $year;
    }

    public function DisplayDate() {
      return $this->month . "/" . $this->day . "/" . $this->year;
    }
}

$DateTest = new Date(11, 7, 2022);
echo "Date: {$DateTest->DisplayDate()}" . PHP_EOL;

echo "Gotten month: {$DateTest->getMonth()}" . PHP_EOL;
echo "Set month: {$DateTest->setMonth(3)}" . PHP_EOL;

echo "Gotten day: {$DateTest->getDay()}" . PHP_EOL;
echo "Set day: {$DateTest->setDay(2)}" . PHP_EOL;

echo "Gotten year: {$DateTest->getYear()}" . PHP_EOL;
echo "Set year: {$DateTest->setYear(2003)}" . PHP_EOL;

echo "Date: {$DateTest->DisplayDate()}" . PHP_EOL;
