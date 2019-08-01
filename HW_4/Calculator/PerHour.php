<?php
namespace Calculator\PerHour;

class PerHour extends Tarifs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 0;
        $this->valuePerMin = 200/60;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}