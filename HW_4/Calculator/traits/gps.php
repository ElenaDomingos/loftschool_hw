<?php
namespace Calculator\traits;
trait GPS {
    public function gps($minuts) {
        if($minuts>60){
        $valueGPS = (int)($minuts/60) * 15;
        }else {
            echo 'GPS service cant be used';
        }


    }
}