<?php


namespace res;


class Give5 extends CashHandler
{
    public function give(ExchangeInterface $money)
    {
        if ($money->getFives () > 0)
        {
            echo "Give " . $money->getFives () . " 5 in cash <br>";
        }
        $this->next ($money);
    }

}