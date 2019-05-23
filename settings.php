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
        <title>Личный кабинет</title>
        <link href="assets/img/faviconka_ru_1217.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="#">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
    <header class="site-header">
    <a href="#" class="site-header_logo">Smart Parking</a>
    <div class="container row headerrow headpad">
    <nav class="site-header_menu main-menu">
    <ul>
    <li><a href="index.php" class="is-active">Главная</a></li>
    <li><a href="change-place.php">Выбрать место</a></li>
    <?
if (!isset($_COOKIE['id']) or !isset($_COOKIE['hash']))
{
    ?>
    <li><a href="account.php ">Личный кабинет</a></li>
<?} else{
    ?>
    <li><a href="account.php "><?echo $_COOKIE['username']?></a></li>
    <li><a href="logout.php ">Выйти</a></li>
<?php }
?>
    </ul>
    </nav>
    </div>
</header>

    <div class="container">
        <div class="row ls-head">
            <span>Личный кабинет</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 content upper">
                <div class="left-block">
                    <ul>
                        <li><a href="account.php"><img src="assets/img/userprofile_118350.png">О ВАС</a></li>
                        <li><a href="#"><img src="assets/img/sheetandpencil_118361.png">ИСТОРИЯ</a></li>
                        <li class="ls-active"><a href="settings.php"><img src="assets/img/mechanicwrench_118392.png">НАСТРОЙКИ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="right-block">
                    <div class="content rgh-header">
                        <span>Редактирование информации</span>
                    </div>
                    <form method="post">
                        <div class="info">
                            <div>
                                <img class="ls-img" src="assets/img/modified.png">
                                <input type="file" name="image">
                            </div>
                            <div class="information">
                                <div class="about-user">
                                    <input type="text" placeholder="Имя">
                                </div>
                                <div class="about-user">
                                    <input type="text" placeholder="Фамилия">
                                </div>
                                <div class="about-user">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="about-user">
                                    <input type="text" placeholder="Телефон">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button">СОХРАНИТЬ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    </html>
<?php
/*
if ($_GET['page'] == 'history') {
    require 'history.php';

} elseif ($_GET['page'] == 'settings') {
    require 'settings.php';

} else {
    require 'ls.php';
}
*/
?>