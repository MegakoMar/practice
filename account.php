<?
if (!isset($_COOKIE['id']) or !isset($_COOKIE['hash']))
{
    header("Location: login.php");
    exit;
}
else
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
<header class="site-header">
    <a href="#" class="site-header_logo">Smart Parking</a>
    <div class="container row headerrow">
        <nav class="site-header_menu main-menu">
            <ul>
                <li><a href="index.php" class="is-active">Главная</a></li>
                <li><a href="change-place.php">Выбрать место</a></li>
                <li><a href="account.php ">Личный кабинет</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container-fluid">
    <div class="row content">

    </div>
</div>
</body>
</html>