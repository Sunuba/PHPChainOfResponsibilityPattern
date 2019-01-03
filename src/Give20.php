<?php


namespace res;


class Give20 extends CashHandler
{
    public function give($money)
    {
        if ($money->getTwenties () > 0)
        {
            echo "Give " . $money->getTwenties () . " 20 in cash <br>";
        }
        $this->next ($money);
    }

}