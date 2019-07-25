<?php
try {

    $pdo = new PDO("mysql:host=localhost;dbname=loftschool;charset=utf8", 'root', '');

} catch (PDOException $e) {


    echo "Erro " . $e->getMessage();

}