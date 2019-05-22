<?
header('Content-Type: text/html; charset=utf-8');
include_once 'config.php';
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
# Соединямся с БД
$link = mysqli_connect($db_host, $db_user, $db_password);
mysqli_select_db($link,$db_base);

# Вытаскиваем из БД запись, у которой логин равняеться введенному
$query = mysqli_query($link,"SELECT id, password FROM users WHERE username='".mysqli_real_escape_string($link, $_POST['username'])."' LIMIT 1");
$data = mysqli_fetch_row($query);
# Соавниваем пароли
if($data[1] == md5($_POST['password']))
{
    # Генерируем случайное число и шифруем его
    $hash = md5(generateCode(10));
    # Записываем в БД новый хеш авторизации и ID
    mysqli_query($link,"UPDATE users SET hash='".$hash."' WHERE id='".$data[0]."'");
    # Ставим куки
    setcookie("id", $data[0], time()+60*60, '/');
    setcookie("username", $_POST['username'], time()+60*60, '/');
    setcookie("hash", $hash, time()+60*60, '/');
    # Переадресовываем браузер на страницу проверки нашего скрипта
    header("Location: check.php"); exit();
}
else
{
    print "Вы ввели неправильный логин/пароль";
}
mysqli_close($link);