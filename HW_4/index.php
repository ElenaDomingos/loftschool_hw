<?php
require_once 'vendor/autoload.php';
require_once 'Calculator/Basic.php';
require_once 'Calculator/PerHour.php';
require_once 'Calculator/PerDay.php';
require_once 'Calculator/Student.php';

use Calculator\Basic;
use Calculator\PerHour;
use Calculator\PerDay;
use Calculator\Student;

echo 'Tariff Basic <br>';
$basic = new Basic();
echo $basic->calculate(20, 120, 25, 1, 1);
echo "<br>";
echo 'Tariff Per Hour  <br>';
$perHour = new PerHour();
echo $perHour->calculate(1,3,20,1, 0);
echo "<br>";
echo 'Tariff Per Day  <br>';
$perDay = new PerDay();
$perDay->calculate(3,3,28,0,1);

echo '<br>';
echo 'Tariff Student';
$student = new Student();
$student->calculate(1,4,28,0,0);