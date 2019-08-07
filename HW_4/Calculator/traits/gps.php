<?php

namespace Calculator\traits;

trait GPS
{

    public function gps($minuts, $valueGPS)
    {
        if ($minuts > 60) {
            $valueGPS->calculate($minuts);
        } else {
            echo 'GPS service cant be used';
        }


    }
}