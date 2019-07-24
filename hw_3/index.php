<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container {
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
        margin:50px auto;
        width:1800px;
        max-width: 90%;

    }

    .col-6 {
        width:40%;
        height:150px;
        border:1px solid #1d1d1d;
        margin:10px;
        padding:20px;
    }
    </style>
</head>
<body>
    

<?php
require 'src/functions.php';

task1('data.xml');

task2();

task3();

?>

</body>
</html>