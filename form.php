<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'config.php';
date_default_timezone_set('Europe/Moscow');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $timeOpenForm = $_POST['datetime'];
    $timeSendForm = date("Y-m-d H:i:s");

    echo '<br>';


    //Отправка данных на почту, чтобы не спамить при тестах, пока что отключено
    //mail ($emailTo , "From form" , "From\nName: $name\nMessage: - $message", "From $email");



    // Блок 2: Cоздание подключения к базе данных
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка - Не удалось подключиться к базе данных' . mysqli_error($link));

    // Блок 3: Записываем в БД
    $query_insert = 'INSERT INTO messages (name, email, message, timeOpenForm, timeSendForm) VALUES ("'. $name . '","' . $email . '","' . $message . '","' . $timeOpenForm . '","' . $timeSendForm . '")';
    //mysqli_query($link, $query_insert) or die('Ошибка - Не удалось записать данные в БД!' . mysqli_error($link));

    // Блок 5: Закрыть подключения к базе данных
    mysqli_close($link);
    ?>
    <!--<div class="container">
        <div class="row">
            <span>Thanks for your feedback! <br> Your comment is important to us</span>
        </div>
    </div>-->
</body>
</html>

