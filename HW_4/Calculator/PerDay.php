<?php
namespace Calculator;
require_once 'Tariffs.php';
use Calculator\Tariffs;

class PerDay extends Tariffs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 1;
        if($minuts < 1440) {
            $minuts = 1440;
        }
               $this->valuePerMin = 1000/24;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}