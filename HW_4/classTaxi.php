<?php

interface iPlanTaxi
{
    public function calculate($km, $minuts, $age, $addservice);
}

trait GPS
{

}

abstract class Tarifs implements iPlanTaxi
{

    protected $valuePerKm = 1;
    protected $valuePerMin = 1;
    public $minAge = 18;
    public $maxAge = 65;

    public $valueTotal;

    public function calculate($km, $minuts, $age, $addservice)
    {

        $this->valueTotal = $this->valuePerKm * $km + $this->valuePerMin * $minuts;


        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;

            $this->valueTotal = $this->valueTotal + $tenPercent;

            echo $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {

            echo $this->valueTotal;
        } else {
            echo $this->valueTotal;
        }
    }
}

class Basic extends Tarifs
{
    public function calculate($km, $minuts, $age, $addservice)
    {

        $this->valuePerKm = 10;
        $this->valuePerMin = 3;
        parent::calculate($km, $minuts, $age, $addservice);
    }
}

$basic = new Basic;
echo $basic->calculate(20, 10, 20, 0);