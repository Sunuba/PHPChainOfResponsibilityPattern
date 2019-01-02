<?php

namespace res;

class BankBranch
{
    private $hundreds = 0;
    private $fifties = 0;
    private $twenties = 0;
    private $tens = 0;
    private $fives = 0;
    private $ones = 0;

    /**
     * @return mixed
     */
    public function getHundreds()
    {
        return $this->hundreds;
    }

    /**
     * @param mixed $hundreds
     */
    public function setHundreds($hundreds): void
    {
        $this->hundreds = $hundreds;
    }

    /**
     * @return mixed
     */
    public function getFifties()
    {
        return $this->fifties;
    }

    /**
     * @param mixed $fifties
     */
    public function setFifties($fifties): void
    {
        $this->fifties = $fifties;
    }

    /**
     * @return mixed
     */
    public function getTwenties()
    {
        return $this->twenties;
    }

    /**
     * @param mixed $twenties
     */
    public function setTwenties($twenties): void
    {
        $this->twenties = $twenties;
    }

    /**
     * @return mixed
     */
    public function getTens()
    {
        return $this->tens;
    }

    /**
     * @param mixed $tens
     */
    public function setTens($tens): void
    {
        $this->tens = $tens;
    }

    /**
     * @return mixed
     */
    public function getFives()
    {
        return $this->fives;
    }

    /**
     * @param mixed $fives
     */
    public function setFives($fives): void
    {
        $this->fives = $fives;
    }

    /**
     * @return mixed
     */
    public function getOnes()
    {
        return $this->ones;
    }

    /**
     * @param mixed $ones
     */
    public function setOnes($ones): void
    {
        $this->ones = $ones;
    }

}