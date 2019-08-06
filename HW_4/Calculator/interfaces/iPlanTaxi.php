<?php
namespace Calculator\iPlanTaxi;

interface iPlanTaxi
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver);
}