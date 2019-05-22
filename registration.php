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
    <div class="row">
        <div class="col-6 img2"></div>
        <div class="col-6 block white-bg">
            <div class="">
                <span class="art-h1">Регистрация</span>
            </div>
            <div class="content text-style">
                <form action="create_user.php" method="post">
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" name="username" class="form-control" id="inputUsername" aria-describedby="usernameHelp" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputTelephone">Telephone</label>
                        <input type="text" name="telephone" class="form-control" id="inputTelephone" aria-describedby="telephoneHelp" placeholder="Telephone" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Отправить </button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>