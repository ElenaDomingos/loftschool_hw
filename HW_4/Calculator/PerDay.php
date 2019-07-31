<?php
namespace Calculator\PerDay;

use Calculator\Tarifs;

class PerDay extends Tarifs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 1;
        if($minuts < 1440) {
            $minuts = 1440;
        }
               $this->valuePerMin = 1000/0.25;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}