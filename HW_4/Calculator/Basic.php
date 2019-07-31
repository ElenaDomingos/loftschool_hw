<?php

namespace Calculator;

class Basic extends Tarifs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 10;
        $this->valuePerMin = 3;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}