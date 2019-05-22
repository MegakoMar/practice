<html>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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

    <div class="carousel slide" data-ride="carousel" id="slides">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="container-fluid carousel-item active">
                <div class="row content block-text slide-block">
                    <span class="header-h1">Добро пожаловать</span>
                    <span class="header-h2">Здесь вы найдете много полезной информации о нашем продукте</span>
                </div>
            </div>
            <div class="container-fluid carousel-item active">
                <div class="row content block-text slide-block">
                    <span class="header-h1">Добро пожаловать</span>
                    <span class="header-h2">Здесь вы найдете много полезной информации о нашем продукте</span>
                </div>
            </div>
            <div class="container-fluid carousel-item active">
                <div class="row content block-text slide-block">
                    <span class="header-h1">Добро пожаловать</span>
                    <span class="header-h2">Здесь вы найдете много полезной информации о нашем продукте</span>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 block black-bg">
                <div class="">
                    <span class="art-h1">Закрытая территория</span>
                </div>
                <div class="content text-style">
                    <p>
                        A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                    </p>
                    <p>
                        Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                    </p>
                </div>
            </div>
            <div class="col-6 img1"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 img2"></div>
            <div class="col-6 block white-bg">
                <div class="">
                    <span class="art-h1">Комфортные условия</span>
                </div>
                <div class="content text-style">
                    <p>
                        A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                    </p>
                    <p>
                        Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 block black-bg">
                <div class="">
                    <span class="art-h1">Современное оборудование</span>
                </div>
                <div class="content text-style">
                    <p>
                        A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.
                    </p>
                    <p>
                        Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.
                    </p>
                </div>
            </div>
            <div class="col-6 img3"></div>
        </div>
    </div>


    <div class="container-fluid-list">
        <div class="list-style">
            <div class="content list-header"><span class="art-h1">Наши преимущества</span></div>
            <div>
                <ul class="row ">
                    <li class="col-4 service-list-left">
                        <img src="assets/img/icon1.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                    <li class="col-4 service-list-center">
                        <img src="assets/img/icon2.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                    <li class="col-4 service-list-right">
                        <img src="assets/img/icon3.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                    <li class="col-4 service-list-left">
                        <img src="assets/img/icon4.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                    <li class="col-4 service-list-center">
                        <img src="assets/img/icon5.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                    <li class="col-4 service-list-right">
                        <img src="assets/img/icon6.png"/>
                        <h3>Consectetur vestibulum</h3>
                        <p>Consectetur vestibulum maecenas curabitur hac felis vestibulum urna velit parturient suspendisse a ad lacus mauris</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-6 img4"></div>
            <div class="col-6 block black-bg content">
                <div class="">
                    <span class="art-h1">Наше расположение</span>
                </div>
                <div class="content text-style">
                    <p>
                        Наша парковка расположена в очень удобном для вас месте. Вам не придется долго ходить пешком, оставляя одну свою малышку.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>