<?php
require 'config.php';

$host = $config['DB_HOST'];
$user = $config['DB_USER'];
$pass = $config['DB_PASS'];
$db = $config['DB_NAME'];

$connect = mysqli_connect($host,$user,$pass,$db);

if (!$connect) {
    echo 'Нет соединения с БД. Код ошибки: ' . mysqli_connect_errno() .
        ' Сообщение ошибки: ' . mysqli_connect_error();
    exit;
}

mysqli_query($connect, "SET NAMES 'utf8';");
mysqli_query($connect, "SET CHARACTER SET 'utf8';");
mysqli_query($connect, "SET SESSION collation_connection = 'utf8_general_ci';");

$select = mysqli_query($connect, "SELECT * FROM clients;");

while ($row = mysqli_fetch_assoc($select)) {
    echo $row["id"] .
        " - <b>ФИО:</b> " . $row["fio"] . "; " .
        "<b>Дата рождения:</b> " . $row["date"] . "; " .
        "<b>Паспортные данные:</b> " . $row["passport"] . "; " .
        "<b>Телефон:</b> " . $row["mobile"] . "; " .
        "<b>Адрес:</b> " . $row["address"] . "; " .
        "<b>Email:</b> " . $row["email"] . "; " .
        "<b>Цель:</b> " . $row["target"] . "<br>";
}

mysqli_close($connect);
?>