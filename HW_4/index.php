<?php

use Calculator\Basic;
use Calculator\PerHour;
use Calculator\PerDay;

$basic = new Basic();
echo $basic->calculate(20, 10, 20, 0, 0);

$perhour = new PerHour();
echo $perhour->calculate(2, 120, 23, 1, 0);


