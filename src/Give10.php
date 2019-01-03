<?php


namespace res;


class Give10 extends CashHandler
{
    public function give($money)
    {
        if ($money->getTens () > 0)
        {
            echo "Give " . $money->getTens () . " 10 in cash <br>";
        }
        $this->next ($money);
    }

}