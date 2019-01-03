<?php require_once ('vendor/autoload.php');

use res\Client;
use res\ATM;
use res\BankBranch;
use res\Give100;
use res\Give50;
use res\Give20;
use res\Give10;
use res\Give5;
use res\Give1;


$money = new ATM(99);
$money->distribute ();
$client = new Client($money);

$give100 = new Give100();
$give50 = new Give50();
$give20 = new Give20();
$give10 = new Give10();
$give5 = new Give5();
$give1 = new Give1();

$give100->setSuccessor ($give50);
$give50->setSuccessor ($give20);
$give20->setSuccessor ($give10);
$give10->setSuccessor ($give5);
$give5->setSuccessor ($give1);


$give100->give ($money);

