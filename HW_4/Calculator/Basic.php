<?php
namespace Calculator;
//require '../vendor/autoload.php';
require_once 'Tarifs.php';

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



