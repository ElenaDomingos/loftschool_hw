<?php

namespace Calculator;

require_once 'Tariffs.php';

use Calculator\Tariffs;


class Basic extends Tariffs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 10;
        $this->valuePerMin = 3;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}



