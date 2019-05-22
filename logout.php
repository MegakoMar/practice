<?php
setcookie("id", "", time() - 3600, "/");
setcookie("username", "", time() - 3600, "/");
setcookie("hash", "", time() - 3600, "/");

header("location:index.php");
exit;

/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 20.12.2018
 * Time: 11:51
 */