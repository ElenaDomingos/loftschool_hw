<?php
require 'vendor/autoload.php';
require_once 'Calculator/Basic.php';
require_once 'Calculator/PerHour.php';
use Calculator\Basic;
use Calculator\PerHour;


$basic = new Basic();
echo $basic->calculate(20, 10, 20, 0, 0);

$perhour = new PerHour();
echo $perhour->calculate(2, 120, 23, 1, 0);


