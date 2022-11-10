<?php

class BankAccount {
    public string $name;
    public float $balance;

    public function __construct($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance(): string {
        return $this->name . ", " . "$" .
            abs(number_format($this->balance, 2, '.', ','));
    }
}
$ben = new BankAccount("Benson", -17.25);
echo $ben->show_user_name_and_balance();
echo PHP_EOL;