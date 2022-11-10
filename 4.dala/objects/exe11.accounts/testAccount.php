<?php

require_once 'Account.php';

$mattAccount = new Account("Matt", 1000);
$myAccount = new Account("My account", 0);
$mattAccount->withdrawal(100);
$myAccount->deposit(100);

echo $mattAccount->displayDetails();
echo PHP_EOL;
echo $myAccount->displayDetails();
echo PHP_EOL;


$accountA = new Account("Account A", 100);
$accountB = new Account("Account B", 0);
$accountC = new Account("Account C", 0);

$accountA->transfer($accountA, $accountB, 50);
$accountB->transfer($accountB, $accountC, 25);

echo $accountA->displayDetails();
echo PHP_EOL;
echo $accountB->displayDetails();
echo PHP_EOL;
echo $accountC->displayDetails();
echo PHP_EOL;