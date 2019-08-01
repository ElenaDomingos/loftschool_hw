<?php

namespace Calculator\Tarifs;
use Calculator\interfaces\iPlanTaxi;

abstract class Tarifs implements iPlanTaxi
{

    protected $valuePerKm = 1;
    protected $valuePerMin = 1;
    public $minAge = 18;
    public $maxAge = 65;

    public $valueTotal;

    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {
        echo "Passing by Tarifs class and calculate method";
        echo "<br>";
        echo "km " . $km . " minuts " . $minuts . " age " . $age;

        $this->valueTotal =  $this->valuePerKm * $km + $this->valuePerMin * $minuts;
        echo "<br>";
        echo "ValueTotal " . $this->valueTotal;

        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;
            echo "<br>";
            echo "10% de valorTotal " . $tenPercent;
            $this->valueTotal = $this->valueTotal + $tenPercent;
            echo "<br>";
            echo $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {
            echo "<br>";
            echo " age is less and max age and more than min age" ;
            echo "<br>";
            echo $this->valueTotal;
        } else {
            echo $this->valueTotal;
        }

        if($gps) {
            use GPS {
                return $this->valueTotal + $valueGPS;
            }
        }

        if($additionaldriver){
            use AdditionalDriver {
                return $this->valueTotal + $valurForAddDriver;
            }
        }
    }
}
