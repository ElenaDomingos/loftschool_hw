<?php

$bmw    = ['model'=>'X5', 'speed'=>'120', 'doors'=>'5','year'=>'2015'];

$toyota = ['model'=>'Carola', 'speed'=>'220', 'doors'=>'4','year'=>'2016'];

$opel   = ['model'=>'Corsa', 'speed'=>'120', 'doors'=>'4','year'=>'2011'];

$cars   = ['bmw' => $bmw ,'toyota' => $toyota, 'opel' => $opel];


echo '<br>';

foreach($cars as $car => $name_car)
{

    echo "CAR $car <br>$car";

    foreach($name_car  as  $quality_of_car => $value)
    {

        echo "  $value  ";

    }
    echo "<br>";
}
