<?php

class SavingsAccount {
    public float $balance;
    public float $annualInterestRate;
    public int $accountTime;
    public float $deposit;
    public float $withdraw;

    public function withdrawal(): float {
        return $this->balance -= $this->withdraw;
    }
    public function depositing(): float {
        return $this->balance += $this->deposit;
    }

    public function addMonthlyInterest(): float {
        return ($this->annualInterestRate / 12) * $this->balance;
    }
}
$user = new SavingsAccount();
$user->balance = readline("How much money is in the account?: ");
$user->annualInterestRate = readline("Enter the annual interest rate: ");
$user->accountTime = readline("How many months has the account been opened? ");

$startBalance = $user->balance;
$months = 1;
$totalDeposit = 0;
$totalWithdrawal = 0;
$interestBalance = 0;
while($months <= $user->accountTime) {
    $user->deposit = readline("Enter amount deposited for month: {$months}: ");
    $totalDeposit = $user->deposit + $totalDeposit;
    $user->balance = $user->depositing();

    $user->withdraw = readline("Enter amount withdrawn for {$months}: ");
    $totalWithdrawal = $user->withdraw + $totalWithdrawal;
    $user->balance = $user->withdrawal();

    $interestBalance = $interestBalance + $user->addMonthlyInterest();
    $user->balance = $user->balance + $user->addMonthlyInterest();

    $months++;


}
$currency = "$";
echo "Total deposited: " . $currency .
    number_format($totalDeposit, 2, '.', ',') . PHP_EOL;
echo "Total withdrawn: " . $currency .
    number_format($totalWithdrawal, 2, '.', ',') . PHP_EOL;

echo "Interest earned: " . $currency .
    number_format($interestBalance, 2, '.', ',') . PHP_EOL;

$endingBalance = $startBalance + $totalDeposit + $interestBalance - $totalWithdrawal;
echo "Ending balance: " . $currency . number_format($endingBalance, 2, '.', ',') . PHP_EOL;



