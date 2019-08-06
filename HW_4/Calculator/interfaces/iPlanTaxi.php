<?php

namespace Calculator\interfaces;

interface iPlanTaxi
{
    public function calculate($km, $minuts, $age, $gps, $additionaldriver);
}