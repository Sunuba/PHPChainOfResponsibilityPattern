<?php


namespace res;


abstract class CashHandler {
    protected $successor;
    public abstract function give(ExchangeInterface $money);

    public function setSuccessor(CashHandler $successor)
    {
        $this->successor = $successor;
    }

    public function next(ExchangeInterface $money)
    {
        if ( $this->successor )
        {
            $this->successor->give($money);
        }
    }

}
