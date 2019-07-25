<?php
// Подключение к базе данных XAMPP
require 'connectdb.php';

// Код, принимающий данные из формы

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$building = $_POST['building'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];
$change = $_POST['change'];
$paycard = $_POST['paycard'];
$callback = $_POST['callback'];

// Проверяем, если есть такой имейл в базе данных users

$select = "SELECT * FROM `users` WHERE email ='$email'";
$stm = $pdo->query($select);
$stm->setFetchMode(PDO::FETCH_ASSOC);
$row = $stm->fetch();

//  Если есть, узнаем его айди и присваиваем его переменной user_id

if ($row) {

    $user_id = $row['id'];
    $status = 1;

// Если нет, добавляем пользователя в базу данных, и потом узнаем его айдишник и присваиваем значение переменной user_id
} else {
    $users = 'INSERT INTO users (`email`, `name`, `phone`) VALUES (:email, :namee, :phone)';
    $stmt = $pdo->prepare($users);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':namee', $name);
    $stmt->bindParam(':phone', $phone);

    if ($stmt->execute()) {

        $select = "SELECT * FROM `users` WHERE email ='$email'";

        $stm1 = $pdo->query($select);
        $stm1->setFetchMode(PDO::FETCH_ASSOC);
        $row1 = $stm1->fetch();
        $user_id = $row1['id'];
        $status = 0;
    }

}

// Когда у нас есть переменная user_id мы можем вносить данные в базу данных orders

$orders = 'INSERT INTO `orders` (`user_id`, `street`,`building`,`part`,`appt`,`floor`,`comment`,`change`,`paycard`,`callback`) VALUES (:user_id, :street, :building, :part, :appt, :floor, :comment, :change, :paycard, :callback) ';
$stmt1 = $pdo->prepare($orders);
$stmt1->bindParam(':user_id', $user_id);
$stmt1->bindParam(':street', $street);
$stmt1->bindParam(':building', $building);
$stmt1->bindParam(':part', $part);
$stmt1->bindParam(':appt', $appt);
$stmt1->bindParam(':floor', $floor);
$stmt1->bindParam(':comment', $comment);
$stmt1->bindParam(':change', $change);
$stmt1->bindParam(':paycard', $paycard);
$stmt1->bindParam(':callback', $callback);

if ($stmt1->execute()) {
// Узнаем номер последнего заказа, который по логике должен быть именно этим заказом.
    $select = "SELECT id FROM `orders` ORDER BY id DESC LIMIT 1";
    $stm = $pdo->query($select);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stm->fetch();
    $order_id = $row['id']; // значение кладем в переменную order_id

    $countofrows = "SELECT id FROM `orders` WHERE user_id='{$user_id}'";
    $count = $pdo->query($countofrows)->rowCount(); // узнаем сколько заказов было сделано пользователем

    if ($status === 1) {
        $yourorder = 'Это уже ваш ' . $count . ' заказ';
    } else {
        $yourorder = 'Спасибо - это ваш первый заказ';
    }

    // Создаем письмо и отправляем его пользователю как подтверждение. На почту mail.ru письма доходят с задержкой, на gmail сразу же
    $point = 'Заказ ' . $order_id;
    $headers = "From: Бургерная \n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    $subject = "Ваш заказ будет доставлен по адресу: " . $street . ", " . $building . ", корпус: " . $part . ", кв.: " . $appt . ". Вы заказали DarkBeefBurger за 500 рублей." . $yourorder;
    if (mail($email, $point, $subject, $headers)) {
        echo 1;
    }


}


