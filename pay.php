<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оплата</title>
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
                    <li><a href="#">Забронировать место</a></li>
                    <li><a href="account.php ">Личный кабинет</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-8 block-form black-bg">
                <div class="">
                    <span class="form-header">Оплата парковки</span>
                </div>
                <div class="form-content">
                    <form action="form.php" method="post">
                        <label>
                            ФИО:
                            <input type="text" class="color-text" name="name" placeholder="Иванов Иван Иванович" required/>
                        </label>
                        <label>
                            Электронная почта:
                            <input type="email" class="color-text" name="email" placeholder="your_email@domain.com" required>
                        </label>
                        <label>
                            Номер телефона:
                            <input type="tel" class="color-text" name="phonenumber" placeholder="+7(999)-999-99-99" required/>
                        </label>
                        <label>
                            Выберите ряд:
                            <select>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </label>
                        <label>
                            Место:
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
                        <label>
                            Выберети день:
                            <input type="date" name="date" class="color-text">
                        </label>
                        <label>
                            Время:
                            <input type="time" name="time" class="color-text">
                        </label>
                        <div class="button-style"><button>Перейти к оплате</button></div>
                        <input type="hidden" name="datetime" value="<?php $date = date("Y-m-d H:i:s"); echo htmlspecialchars($date);?>">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>