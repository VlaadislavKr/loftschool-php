<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=loftschool_dz3", 'mysql', 'mysql');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}

$email = $_POST['email'];
if ($email) {
    $query = $pdo->prepare("SELECT `email` FROM users WHERE `email` = :email");
    $query->execute(['email' => $email]);
    $user = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($user) {
        $pdo->query("UPDATE users SET `order_count` = order_count+1 WHERE `email` = '$email'");
        $query = $pdo->query("SELECT `id` FROM users WHERE `email` = '$email'");

        $user_id = $query->fetch()['id'];
        $date = date("Y-m-d H:i:s");
        $street = $_POST['street'];
        $house = $_POST['home'];
        $corps = $_POST['part'] ? $_POST['part'] : NULL;
        $flat = $_POST['appt'];
        $floor = $_POST['floor'];
        $comment = $_POST['comment'];
        $change1 = isset($_POST['change']) ? "1" : "0";
        $pay_card1 = isset($_POST['pay_card']) ? "1" : "0";
        $callback1 = isset($_POST['callback']) ? "1" : "0";

        $add_new_order = $pdo->prepare("INSERT INTO orders (`user_id`, `date`, `street`, `house`, `corps`, `flat`, `floor`, `change`, `pay_card`, `no_callback`, `comment`) values (?,?,?,?,?,?,?,?,?,?,?)");
        $add_new_order->execute([$user_id,$date,$street,$house,$corps,$flat,$floor,$change1,$pay_card1,$callback1,$comment]);

        $last_order_id = $pdo->lastInsertId();
        $query = $pdo->query("SELECT `order_count` FROM users WHERE `email` = '$email'");
        $order_count = $query->fetch()['order_count'];
        $corps_text = $_POST['part'] ? " корпус " . $_POST['part'] . "," : "";

        echo "Спасибо, ваш заказ будет доставлен по адресу: 'Ул.$street, д.$house,$corps_text кв.$flat, этаж $floor'<br>
              Номер вашего заказа: #$last_order_id<br>
              Это ваш $order_count-й заказ!";
    } else {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $house = $_POST['home'];
        $corps = $_POST['part'];
        $flat = $_POST['appt'];
        $floor = $_POST['floor'];
        $comment = $_POST['comment'];
        $change1 = isset($_POST['change']) ? "1" : "0";
        $pay_card1 = isset($_POST['pay_card']) ? "1" : "0";
        $callback1 = isset($_POST['callback']) ? "1" : "0";

        $add_new_user = $pdo->prepare("INSERT INTO users (`name`, `phone`, `email`) values (?,?,?)");
        $add_new_user->execute([$name, $phone, $email]);

        $last_id = $pdo->lastInsertId();
        $date = date("Y-m-d H:i:s");

        $add_new_order = $pdo->prepare("INSERT INTO orders (`user_id`, `date`, `street`, `house`, `corps`, `flat`, `floor`, `change`, `pay_card`, `no_callback`, `comment`) values (?,?,?,?,?,?,?,?,?,?,?)");
        $add_new_order->execute([$last_id,$date,$street,$house,$corps,$flat,$floor,$change1,$pay_card1,$callback1,$comment]);
    }
}
