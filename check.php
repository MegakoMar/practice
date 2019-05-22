<?php
include_once 'config.php';
header('Content-Type: text/html; charset=utf-8');
$link = mysqli_connect($db_host, $db_user, $db_password);
mysqli_select_db($link, $db_base);
if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
    $query = mysqli_query($link,"SELECT * FROM users WHERE id = '" . intval($_COOKIE['id']) . "' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
    if (($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id']) or ($userdata['username'] !== $_COOKIE['username'])) {
        setcookie("id", "", time() - 3600, "/");
        setcookie("username", "", time() - 3600, "/");
        setcookie("hash", "", time() - 3600, "/");
        print "Хм, что-то не получилось";
    } else {
        $err = "Привет, " . $userdata['username'] . ". Всё работает!";
        header("location:index.php");
        print  $err;
    }
} else {
    print "Включите куки";
}
