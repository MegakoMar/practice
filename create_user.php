<?
header('Content-Type: text/html; charset=utf-8');
include_once 'config.php';
$username = $_POST['username'];
$email=$_POST['email'];
$password = md5($_POST['password']);
$telephone = $_POST['telephone'];
$err = array();
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка - Не удалось подключиться к базе данных' . mysqli_error($link));
mysqli_select_db($link,$db_base);
if (mysqli_errno($link))
{
    $err[]="Ошибка, нет соединения  с БД.";
}
# проверям логин
if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['username']))
{
    $err[] = "Логин может состоять только из букв английского алфавита и цифр";
}
if(strlen($_POST['username']) < 3 or strlen($_POST['username']) > 30)
{
    $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
}
# проверяем, не сущестует ли пользователя с таким именем
$query = mysqli_query($link,"SELECT COUNT(id) FROM users WHERE username='".mysqli_real_escape_string($link,$_POST['username'])."'");
$row = mysqli_fetch_row($query);

if($row[0] > 0)
{
    $err[] = "Пользователь с таким логином уже существует в базе данных";
}
# Если нет ошибок, то добавляем в БД нового пользователя
if(count($err) == 0)
{
    # Убераем лишние пробелы и делаем двойное шифрование
    mysqli_query($link,"INSERT INTO users SET username='".$username."', password='".$password."', email= '".$email."' , telephone='".$telephone."'");
    header("Location: index.php"); exit();
}
else
{
    print "<b>При регистрации произошли следующие ошибки:</b><br>";
    foreach($err AS $error)
    {
        print $error."<br>";
    }
}
mysqli_close($link);