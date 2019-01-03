<?php


namespace res;


abstract class CashHandler {
    protected $successor;
    public abstract function give($money);

    public function setSuccessor(CashHandler $successor)
    {
        $this->successor = $successor;
    }

    public function next(ATM $money)
    {
        if ( $this->successor )
        {
            $this->successor->give($money);
        }
    }

}