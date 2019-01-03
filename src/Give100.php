<?php


namespace res;


class Give100 extends CashHandler
{
    public function give($money)
    {
        if ($money->getHundreds () > 0)
        {
            echo "Give " . $money->getHundreds () . " 100 in cash <br>";
        }
        $this->next ($money);
    }

}