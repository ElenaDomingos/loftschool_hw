<?php
namespace Calculator;
//require '../vendor/autoload.php';
require_once 'Tarifs.php';

use Tariffs;

class Basic extends Tariffs
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver)
    {

        $this->valuePerKm = 10;
        $this->valuePerMin = 3;
        parent::calculate($km, $minuts, $age, $gps, $additionaldriver);
    }
}

$newBasic = new Basic();
$newBasic->calculate(2, 2, 2, 2, 2);

