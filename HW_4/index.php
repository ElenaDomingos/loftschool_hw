<?php
require_once 'vendor/autoload.php';
require_once 'Calculator/Basic.php';
require_once 'Calculator/PerHour.php';

use Calculator\Basic;
use Calculator\PerHour;


$basic = new Basic();
echo $basic->calculate(20, 120, 25, 1, 1);

$perHour = new PerHour();
echo $perHour->calculate(1,3,20,1, 0);

