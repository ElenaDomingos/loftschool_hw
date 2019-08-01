<?php
namespace Calculator\Basic;

use Calculator\Tarifs;

class Basic extends Tarifs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 10;
        $this->valuePerMin = 3;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}

$basic = new Basic();
echo $basic->calculate(20, 10, 20, 0, 0);