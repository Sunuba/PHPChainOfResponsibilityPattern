<?php

namespace res;

class ATM implements ExchangeInterface
{
    private $money = 0;
    private $hundreds = 0;
    private $fifties = 0;
    private $twenties = 0;
    private $tens = 0;
    private $fives = 0;
    private $ones = 0;

    public function __construct($money)
    {
        $this->money = $money;
    }

    public function distribute()
    {
        $qaliq100 = $this->money - ($this->money % 100);
        $this->setHundreds ($qaliq100/100);
        $fifties = $this->money-$qaliq100;
        $qaliq50 = $fifties - ($fifties % 50);
        $this->setFifties ($qaliq50/50);
        $twenties = $fifties-$qaliq50;
        $qaliq20 = $twenties - ($twenties % 20);
        $this->setTwenties ($qaliq20/20);
        $tens = $twenties-$qaliq20;
        $qaliq10 = $tens - ($tens % 10);
        $this->setTens ($qaliq10/10);
        $fives = $tens-$qaliq10;
        $qaliq5 = $fives - ($fives % 5);
        $this->setFives ($qaliq5/5);
        $ones = $fives-$qaliq5;
        $qaliq1 = $ones - ($ones % 1);
        $this->setOnes ($qaliq1/1);
    }

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