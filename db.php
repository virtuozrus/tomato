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

echo "<table>
<tr>
<th>ФИО</th>
<th>Дата рождения</th>
<th>Паспортные данные</th>
<th>Телефон</th>
<th>Адрес</th>
<th>Email</th>
<th>Цель</th>
</tr>";
while ($row = mysqli_fetch_assoc($select)) {
    echo "<tr>";
    echo "<td>" . $row["fio"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["passport"] . "</td>";
    echo "<td>" . $row["mobile"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["target"] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($connect);
?>