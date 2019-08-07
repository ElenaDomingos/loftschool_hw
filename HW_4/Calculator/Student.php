<?php


namespace Calculator;

require_once 'Tariffs.php';

use Calculator\Tariffs;

class Student extends Tariffs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 4;
        $this->valuePerMin = 1;

        if($age>25){
            echo 'This client cant use this plan';
        }else{
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);}
    }
}
