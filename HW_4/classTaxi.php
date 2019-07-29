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
    public $minuts;
    public $km;
    protected $valuePerKm;
    protected $valuePerMin;
    public $minAge = 18;
    public $maxAge = 65;
    public $age;
    public $valueTotal;


//    public function __construct($km, $minuts, $age)
//    {
//        $this->valuePerKm = $valuePerKm;
//        $this->valuePerMin = $valuePerMin;
//        $this->km = $km;
//        $this->minuts = $minuts;
//        $this->age = $age;
//    }

    public function calculate($km, $minuts, $age)
    {
        $this->valuePerKm = $valuePerKm;
        $this->valuePerMin = $valuePerMin;
        $this->minuts = $minuts;
        $this->age = $age;
        $this->valueTotal = $valuePerKm * $km + $valuePerMin * $minuts;

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
    protected $valuePerKm = 10;
    protected $valuePerMin = 3;


    public function calculate()
    {
        parent::calculate($km, $minuts, $age);
    }

}

$basic = new Basic;
echo $basic->calculate(4, 10, 25);


