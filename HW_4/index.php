<?php
require_once 'vendor/autoload.php';
require_once 'Calculator/Basic.php';
require_once 'Calculator/PerHour.php';

use Calculator\Basic;


$basic = new Basic();
echo $basic->calculate(20, 10, 20, 1, 1);



