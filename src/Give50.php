<?php


namespace res;


class Give50 extends CashHandler
{
    public function give(ExchangeInterface $money)
    {
        if ($money->getFifties () > 0)
        {
            echo "Give " . $money->getFifties () . " 50 in cash <br>";
        }
        $this->next ($money);
    }

}