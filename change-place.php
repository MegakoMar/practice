<?php date_default_timezone_set('Europe/Moscow'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбор места</title>
    <link href="assets/img/faviconka_ru_1217.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<header class="site-header">
    <a href="#" class="site-header_logo">Smart Parking</a>
    <div class="container row headerrow">
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
<div class="container-fluid">
    <div class="row content title">
        <h1>Выбор места</h1>
    </div>
    <span class="content"><?php echo date("D j M Текущее время - H:i"); ?></span>
</div>
<div class="container">
    <form>
        <div class="row content">
            <div class="map-places">
                <div class="block-places">
                    <div class="row-places-left">
                        <div class="place" id="A1">
                            <span>A1</span>
                        </div>
                        <div class="place" id="A2" data-toggle="modal" data-target="#myModal">
                            <span>A2</span>
                        </div>
                        <div class="place" id="A3">
                            <span>A3</span>
                        </div>
                        <div class="place" id="A4">
                            <span>A4</span>
                        </div>
                        <div class="place" id="A5">
                            <span>A5</span>
                        </div>
                        <div class="place" id="A6">
                            <span>A6</span>
                        </div>
                        <div class="place" id="A7">
                            <span>A7</span>
                        </div>
                        <div class="place" id="A8">
                            <span>A8</span>
                        </div>
                        <div class="place" id="A9">
                            <span>A9</span>
                        </div>
                        <div class="place" id="A10">
                            <span>A10</span>
                        </div>
                    </div>
                    <div class="row-places-right">
                        <div class="place" id="B1">
                            <span>B1</span>
                        </div>
                        <div class="place" id="B2">
                            <span>B2</span>
                        </div>
                        <div class="place" id="B3">
                            <span>B3</span>
                        </div>
                        <div class="place" id="B4">
                            <span>B4</span>
                        </div>
                        <div class="place" id="B5">
                            <span>B5</span>
                        </div>
                        <div class="place" id="B6">
                            <span>B6</span>
                        </div>
                        <div class="place" id="B7">
                            <span>B7</span>
                        </div>
                        <div class="place" id="B8">
                            <span>B8</span>
                        </div>
                        <div class="place" id="B9">
                            <span>B9</span>
                        </div>
                        <div class="place" id="B10">
                            <span>B10</span>
                        </div>
                    </div>
                </div>
                <div class="block-places">
                    <div class="row-places-left">
                        <div class="place" id="C1">
                            <span>C1</span>
                        </div>
                        <div class="place" id="C2">
                            <span>C2</span>
                        </div>
                        <div class="place" id="C3">
                            <span>C3</span>
                        </div>
                        <div class="place" id="C4">
                            <span>C4</span>
                        </div>
                        <div class="place" id="C5">
                            <span>C5</span>
                        </div>
                        <div class="place" id="C6">
                            <span>C6</span>
                        </div>
                        <div class="place" id="C7">
                            <span>C7</span>
                        </div>
                        <div class="place" id="C8">
                            <span>C8</span>
                        </div>
                        <div class="place" id="C9">
                            <span>C9</span>
                        </div>
                        <div class="place" id="C10">
                            <span>C10</span>
                        </div>
                    </div>
                    <div class="row-places-right">
                        <div class="place" id="D1">
                            <span>D1</span>
                        </div>
                        <div class="place" id="D2">
                            <span>D2</span>
                        </div>
                        <div class="place" id="D3">
                            <span>D3</span>
                        </div>
                        <div class="place" id="D4">
                            <span>D4</span>
                        </div>
                        <div class="place" id="D5">
                            <span>D5</span>
                        </div>
                        <div class="place" id="D6">
                            <span>D6</span>
                        </div>
                        <div class="place" id="D7">
                            <span>D7</span>
                        </div>
                        <div class="place" id="D8">
                            <span>D8</span>
                        </div>
                        <div class="place" id="D9">
                            <span>D9</span>
                        </div>
                        <div class="place" id="D10">
                            <span>D10</span>
                        </div>
                    </div>
                </div>
                <div class="block-places">
                    <div class="row-places-left">
                        <div class="place" id="E1">
                            <span>E1</span>
                        </div>
                        <div class="place" id="E2">
                            <span>E2</span>
                        </div>
                        <div class="place" id="E3">
                            <span>E3</span>
                        </div>
                        <div class="place" id="E4">
                            <span>E4</span>
                        </div>
                        <div class="place" id="E5">
                            <span>E5</span>
                        </div>
                        <div class="place" id="E6">
                            <span>E6</span>
                        </div>
                        <div class="place" id="E7">
                            <span>E7</span>
                        </div>
                        <div class="place" id="E8">
                            <span>E8</span>
                        </div>
                        <div class="place" id="E9">
                            <span>E9</span>
                        </div>
                        <div class="place" id="E10">
                            <span>E10</span>
                        </div>
                    </div>
                    <div class="row-places-right">
                        <div class="place" id="F1">
                            <span>F1</span>
                        </div>
                        <div class="place" id="F2">
                            <span>F2</span>
                        </div>
                        <div class="place" id="F3">
                            <span>F3</span>
                        </div>
                        <div class="place" id="F4">
                            <span>F4</span>
                        </div>
                        <div class="place" id="F5">
                            <span>F5</span>
                        </div>
                        <div class="place" id="F6">
                            <span>F6</span>
                        </div>
                        <div class="place" id="F7">
                            <span>F7</span>
                        </div>
                        <div class="place" id="F8">
                            <span>F8</span>
                        </div>
                        <div class="place" id="F9">
                            <span>F9</span>
                        </div>
                        <div class="place" id="F10">
                            <span>F10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- Модальное окно -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row content">
                        <div class="col-6 table-places ">
                            <div class="content">
                                <span class="form-h1">Бронирование места</span>
                                <form>
                                    <div class="element-form">
                                        <label class="label-modal">Выбор ряда
                                            <select>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                                <option>F</option>
                                            </select>
                                        </label>
                                        <label class="label-modal">Выбор места
                                            <select>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label> Дата
                                            <div class="element-form">
                                                <input type="date">
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <label> Время начала брони
                                            <select>
                                                <option></option>
                                                <option>07:00</option>
                                                <option>08:00</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                                <option>00:00</option>
                                                <option>01:00</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div>
                                        <label> Время окончания брони
                                            <select>
                                                <option></option>
                                                <option>08:00</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                                <option>00:00</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="">
                                        <span>Цена: 40 руб./ч.</span>
                                    </div>
                                    <div class="element-form">
                                        <div class="button">
                                            <button>Перейти к оплате</button>
                                        </div>
                                    </div>
                                </form>
                                <!--
                                <div class="element-form">
                                    <span>Данное место занято в выбранный момент времени</span>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>