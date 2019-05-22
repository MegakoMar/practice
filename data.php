<?php
include_once 'config.php';

$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка - Не удалось подключиться к базе данных' . mysqli_error($link));

// Блок 4: Вывод из БД
$query_select = 'SELECT * FROM places';
$result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link));
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo $row["id"] . '='. $row["position"].' ';
}
mysqli_free_result($result);



// Блок 5: Закрыть подключения к базе данных
mysqli_close($link);
?>