<?php

namespace res;

class Client
{
    private $moneyRequested = null;
    public $distributedMoney;

    public function __construct($moneyRequested, $distributedMoney)
    {
        $this->moneyRequested = $moneyRequested;
        $this->distributedMoney = $distributedMoney;
    }

    public function getCash()
    {
        $qaliq100 = $this->moneyRequested - ($this->moneyRequested % 100);
        $this->distributedMoney->setHundreds ($qaliq100/100);
        $fifties = $this->moneyRequested-$qaliq100;
        $qaliq50 = $fifties - ($fifties % 50);
        $this->distributedMoney->setFifties ($qaliq50/50);
        $twenties = $fifties-$qaliq50;
        $qaliq20 = $twenties - ($twenties % 20);
        $this->distributedMoney->setTwenties ($qaliq20/20);
        $tens = $twenties-$qaliq20;
        $qaliq10 = $tens - ($tens % 10);
        $this->distributedMoney->setTens ($qaliq10/10);
        $fives = $tens-$qaliq10;
        $qaliq5 = $fives - ($fives % 5);
        $this->distributedMoney->setFives ($qaliq5/5);
        $ones = $fives-$qaliq5;
        $qaliq1 = $ones - ($ones % 1);
        $this->distributedMoney->setOnes ($qaliq1/1);
    }

}