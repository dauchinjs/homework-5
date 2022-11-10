<?php

class Account {
    private string $account;
    private int $balance;

    public function __construct($account, $balance) {
        $this->account = $account;
        $this->balance = $balance;
    }
    public function getBalance(): float {
        return $this->balance;
    }
    public function displayDetails(): string {
        return "Account: " . $this->account . " Balance: " . $this->getBalance();
    }


    public function withdrawal($number): void {
        $this->balance -= $number;
    }
    public function deposit($number): void {
        $this->balance += $number;
    }
    function transfer(Account $from, Account $to, float $amount): void {
        $from->withdrawal($amount);
        $to->deposit($amount);
    }
}





