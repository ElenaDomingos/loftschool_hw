<?php


interface iPlanTaxi
{

    public function calculate($km, $minuts, $age);

}

trait AdditionalService
{


}


abstract class Tarifs implements iPlanTaxi
{
    public $minuts;
    public $km;
    protected $valuePerKm = 1;
    protected $valuePerMin = 1;
    public $minAge = 18;
    public $maxAge = 65;
    public $age;
    public $valueTotal;



    public function calculate($km, $minuts, $age)
    {

        $this->valueTotal = $this->valuePerKm * $this->km + $this->valuePerMin * $this->minuts;

        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;
            $this->valueTotal = $this->valueTotal + $tenPercent;
            return $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {
            return $this->valueTotal;

        } else {
            echo $this->valueTotal;
        }

    }
}

class Basic extends Tarifs
{


    public function calculate($km, $minuts, $age)
    {
        $this->valuePerKm = 10;
        $this->valuePerMin = 3;

        parent::calculate($km, $minuts, $age);

    }

}

$basic = new Basic;
echo $basic->calculate(20,10, 37);

