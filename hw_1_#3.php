<?php
$age = rand(1,100);

if ($age <= 17) {
    echo 'Вам еще рано работать';
} elseif ($age > 18 && $age < 65) {
    echo 'Вам еще работать и работать.';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Возраст не известен';
}

?>