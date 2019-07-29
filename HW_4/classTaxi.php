<?php


interface iPlanTaxi
{

    public function calculate($valuePerKm, $valuePerMin, $age);

}

trait AdditionalService
{
    
}


abstract class Tarifs implements iPlanTaxi
{
    public $valuePerKm;
    public $valuePerMin;
    public $minAge = 18;
    public $maxAge = 65;
    public $age;
    public $valueTotal;


    public function __construct($valuePerKm, $valuePerMin, $age)
    {
        $this->valuePerKm = $valuePerKm;
        $this->valuePerMin = $valuePerMin;
        $this->age = $age;
    }

    public function calculate($valuePerKm, $valuePerMin, $age)
    {
        $this->valuePerKm = $valuePerKm;
        $this->valuePerMin = $valuePerMin;
        $this->valueTotal = $valuePerKm + $valuePerMin;

        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;
            $this->valueTotal = $this->valueTotal + $tenPercent;
            return $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {
            return $this->valueTotal;
        } else {
            echo "This client can't use our service";
        }

    }
}

class Basic extends Tarifs
{
$this->calculate(10,3, 22);
}

$basic = new Basic;
echo $basic->calculate();


