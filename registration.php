<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
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
                <li><a href="account.php ">Личный кабинет</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 img2"></div>
        <div class="col-6 block white-bg">
            <div class="content">
                <span class="art-h1">Регистрация</span>
            </div>
            <div class="content text-style">
                <form action="create_user.php" method="post">
                    <div class="form-group element-form">
                        <label for="inputUsername" class="label-auto content">Логин
                            <input type="text" name="username" class="form-control" id="inputUsername" aria-describedby="usernameHelp" placeholder="Логин" required>
                        </label>
                    </div>
                    <div class="form-group element-form">
                        <label for="inputPass" class="label-auto content">Пароль
                            <input type="password" name="password" class="form-control" id="inputPass" placeholder="Пароль" required>
                        </label>
                    </div>
                    <div class="form-group element-form">
                        <label for="inputEmail" class="label-auto content">Email
                            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email" required>
                        </label>
                    </div>
                    <div class="form-group element-form">
                        <label for="inputTelephone" class="label-auto content">Телефон
                            <input type="text" name="telephone" class="form-control" id="inputTelephone" aria-describedby="telephoneHelp" placeholder="Номер телефона" required>
                        </label>
                    </div>
                    <div class="content">
                        <button type="button" class="btn btn-primary btn-block" id="reg">Регистрация</button>
                    </div>
                </form>
                <div class="content" id="errorMessage"></div>
            </div>
        </div>
    </div>
</div>


<!-- Модальное окно -->
<!--
  data-toggle="modal" data-target="#myModal"
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
                                <span class="form-h1">Поздравляю! Вы успешно зарегестрировались в системе :)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/regAjax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>