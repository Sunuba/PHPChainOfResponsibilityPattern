<?php require_once ('vendor/autoload.php');

use res\Client;
use res\ATM;
use res\BankBranch;

$pul = new Client(99, new ATM());
$pul->getCash();
print_r ($pul);

