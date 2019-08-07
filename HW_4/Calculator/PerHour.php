<?php

namespace Calculator;

require_once 'Tariffs.php';

use Calculator\Tariffs;

class PerHour extends Tariffs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 0;
        $this->valuePerMin = 200 / 60;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}