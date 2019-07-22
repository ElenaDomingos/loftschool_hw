<?php


//task 1

function task1(array $strings, bool $implode = false)
{
    echo '<p>';
    foreach ($strings as $string) {
        if (!$implode) {
            echo '<p>' . $string . ' </p>';
        } else {
            echo $string;
        }
    }
    echo ' </p>';
}

//task2

function task2($operator)
{
    $args = func_get_args();
    $args2 = $args;
    unset($args2[0]);

    $res = 0;

    switch ($operator) {
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

function task3($row, $col)
{
    echo '<table>';
    if ($row !== 0 && $col !== 0) {
        for ($i = 1; $i <= $row; $i++) {
            echo '<tr>';
            for ($x = 1; $x <= $col; $x++) {
                echo '<td>';
                $res = $i * $x;
                echo $res . '</td>';
            }
            echo '</tr>';
        }
    }
    echo '</table>';
}

// task4

function task4()
{
    echo date('d.m.Y H:i') . '<br>';
    $time = time();
    echo date('d.m.Y H:i:s', $time) . '<br>';
}

//task5 

function task5()
{
    $str = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';
    echo str_replace('К', '', $str);
    echo '<br>';
    echo str_replace('Две', 'Три', $str2);
    echo '<br>';
}

//task6 


function task6($file)
{

    if (file_exists($file) && is_readable($file)) {
        file_put_contents($file, 'Hello again!');
        $contents = file_get_contents($file);
        echo $contents;

    } else {
        echo 'File is not exists';
    }
}
   