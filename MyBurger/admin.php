<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
   <style>
       td {
           padding:10px;
           border:1px solid #444444;
       }

   </style>
</head>
<body>


<?php
require 'connectdb.php';
echo 'Список пользователей: <br>';
echo '<table>';
echo '<tr><td>Id:</td><td>Имя</td><td>Телефон</td></tr>';
$select = 'SELECT * FROM users';
foreach($pdo->query($select) as $row) {
    echo '<tr><td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] .'</td>';
    echo '<td>' . $row['phone'] .'</td></tr>';
}

echo '</table>';

echo 'Список заказов';
echo '<table>';
echo '<tr><td>Id:</td><td>User id</td><td>Улица</td><td>Номер дома</td><td>Корпус</td><td>Квартира</td><td>Этаж</td><td>Комментарий</td></tr>';
$select = 'SELECT * FROM orders';
foreach($pdo->query($select) as $row) {
    echo '<tr><td>' . $row['id'] . '</td>';
    echo '<td>' . $row['user_id'] .'</td>';
    echo '<td>' . $row['street'] .'</td>';
    echo '<td>' . $row['building'] .'</td>';
    echo '<td>' . $row['part'] .'</td>';
    echo '<td>' . $row['appt'] .'</td>';
    echo '<td>' . $row['floor'] .'</td>';
    echo '<td>' . $row['comment'] .'</td></tr>';
}

echo '</table>';


?>

</body>
</html>
