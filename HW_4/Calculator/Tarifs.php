<?php

namespace Calculator;

require_once 'interfaces/iPlanTaxi.php';
require 'traits/gps.php';
require 'traits/additionalDriver.php';

use Calculator\interfaces\iPlanTaxi;
use Calculator\traits\GPS;
use Calculator\traits\additionalDriver;


abstract class Tariffs implements iPlanTaxi
{

    protected $valuePerKm;
    protected $valuePerMin;
    public $minAge = 18;
    public $maxAge = 65;

    public $valueTotal=0;

    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {


        if($gps !== 0) {

            return $valueGPS;
            $this->valueTotal = $this->valuePerKm * $km + $this->valuePerMin * $minuts + $valueGPS;
        }

        if($additionaldriver !==0){

                return $valurForAddDriver;
                $this->valueTotal .= $this->valuePerKm * $km + $this->valuePerMin * $minuts + $valurForAddDriver;

        }

        $this->valueTotal = $this->valuePerKm * $km + $this->valuePerMin * $minuts;
        echo "<br>";


        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;
            echo "<br>";
            echo "10% de valorTotal " . $tenPercent;
            $this->valueTotal = $this->valueTotal + $tenPercent;
            echo "<br>";
            echo $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {
            echo "<br>";
            echo " age is less and max age and more than min age";
            echo "<br>";
            echo $this->valueTotal;
        } else {
            echo 'This cliend cant use our service';
        }


    }
}
