<?php


namespace res;


interface ExchangeInterface
{
    public function distribute();
    public function setHundreds($amount);
    public function setFifties($amount);
    public function setTwenties($amount);
    public function setTens($amount);
    public function setFives($amount);
    public function setOnes($amount);
    public function getHundreds();
    public function getFifties();
    public function getTwenties();
    public function getTens();
    public function getFives();
    public function getOnes();
}