<?php

namespace res;

class Client
{
    public $distributedMoney;

    public function __construct($distributedMoney)
    {
        $this->distributedMoney = $distributedMoney;
    }

    public function getDistributedMoney()
    {
        return $this->distributedMoney;
    }

}