<?php

namespace Calculator;

require_once 'interfaces/iPlanTaxi.php';
require_once 'traits/gps.php';
require_once 'traits/additionalDriver.php';

use Calculator\interfaces\iPlanTaxi;
use Calculator\traits\GPS;
use Calculator\traits\additionalDriver;


abstract class Tariffs implements iPlanTaxi
{
    use GPS;
    use additionalDriver;

    protected $valuePerKm;
    protected $valuePerMin;
    public $minAge = 18;
    public $maxAge = 65;

    public $valueTotal=0;

    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {


        if($gps !== 0) {

            $valueGPS = $minuts/60 * 15;

            $this->valueTotal = ($this->valuePerKm * $km) + ($this->valuePerMin * $minuts) + $valueGPS;
            echo 'GPS was selected <br>';
        }

        if($additionaldriver !==0){

              $valueForAddDriver = 200;


                $this->valueTotal += $this->valuePerKm * $km + ($this->valuePerMin * $minuts) + $valueForAddDriver;
                echo 'Additional Driver was selected';
        }else {
            $this->valueTotal = ($this->valuePerKm * $km) + ($this->valuePerMin * $minuts);
        }




        if ($age >= $this->minAge && $age <= 21) {
            $tenPercent = ($this->valueTotal / 100) * 10;

            echo "10% de valorTotal " . $tenPercent;
            $this->valueTotal = $this->valueTotal + $tenPercent;
            echo "<br>";
            echo $this->valueTotal;
        } else if ($age <= $this->maxAge && $age >= $this->minAge) {


            echo "<br>";
            echo $this->valueTotal .' Руб.';
            echo "<br>";
        } else {
            echo 'This client can\'t use our service';
        }


    }
}
