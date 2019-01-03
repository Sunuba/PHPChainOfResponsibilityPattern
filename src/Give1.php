<?php


namespace res;


class Give1 extends CashHandler
{
    public function give($money)
    {
        if ($money->getOnes () > 0)
        {
            echo "Give " . $money->getOnes () . " 1 in cash <br>";
        }
        $this->next ($money);
    }

}