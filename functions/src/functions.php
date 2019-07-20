<?php


//task 1

function task1(array $strings, bool $trueorfalse=false){
echo '<p>';
foreach ($strings as $string) {
    if($trueorfalse=='false'){
    echo '<p>' . $string . ' </p>';
    } else {
        echo $string;
    }
}
echo ' </p>';
}

//task2

function task2($operator) {
$args = func_get_args();
$args2 = $args;
unset($args2[0]);

$res = 0;

switch($operator){
    case '+':
            foreach ($args2 as $arg) {
            $res += $arg;
            }
    break;

    case '-':
            foreach ($args2 as $arg) {
                $res -= $arg;
            }
    break;

    case '*':
            foreach ($args2 as $arg) {
                $res *= $arg;
            }
    break;

    case '/':
            foreach ($args2 as $arg) {
                $res /= $arg;
            }
    break;

    default:
    echo 'The operator is not valid';


}

echo $res . '<br>';

}

//task3

function task3($int1, $int2){
    echo '<table>';
    if($int1 !==0 && $int2 !== 0){
    for($i=1;$i<=$int1;$i++){
            echo '<tr>';
            $y = 1;
            for($x=1;$x<=$int2;$x++){
                echo '<td>';
                $res = $i * $y;
                $y++;
                echo $res .'</td>';
            }
            echo '</tr>';
            }
    }
echo '</table>';
}

// task4

function task4() {
    echo date('d.m.Y H:i') . '<br>';
    $time = time();
    echo date('d.m.Y H:i:s', $time) . '<br>';
}

//task5 

function task5() {
    $str = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';
    echo str_replace('К', '', $str);
    echo '<br>';
    echo str_replace('Две', 'Три', $str2);
    echo '<br>';
}

//task6 


function task6($file) {

    if (file_exists($file) && is_readable($file)) {
        $thisfile = fopen($file, 'w');
        fwrite($thisfile, 'Hello again!');
        $thisfile = fopen($file, 'r'); 
        $contents = fread($thisfile, filesize($file));
        echo $contents;
        fclose($thisfile);
    }
    else {
        echo 'File is not exists';
    }
}
   
