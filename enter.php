<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Авторизация</title>
    <meta http-equiv="Content-Style-Type" content="text/css">
</head>
<body>
<?php
include 'config.php';
//проверка пустых логина и пароля
if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <!--если пустые, то вывод формы-->
    <div style="border: 1px solid green; display: block; margin: 20% auto; text-align: center; width: 135px; height: 135px;">

        <form action="verification.php" method="post">
            <label>Логин:</label><br/>
            <input name="login" type="text" size="15" maxlength="30"><br/>
            <label>Пароль:</label><br/>
            <input name="password" type="password" size="15" maxlength="30"><br/><br/>
            <input type="submit" value="Войти"><br/><br/>
        </form>
        Здравствуйте, <span style="color: red; ">гость</span>! <br/>
       Пожалуйста, авторизуйтесь.
    </div>
    <?php
} else {
    $login=$_SESSION['login'];

    //подключение к бд
    $host = $config['DB_HOST'];
    $user = $config['DB_USER'];
    $pass = $config['DB_PASS'];
    $db = $config['DB_NAME'];

    $dbcon = mysqli_connect($host,$user,$pass,$db);

    if (!$dbcon) {
        echo 'Нет соединения с БД. Код ошибки: ' . mysqli_connect_errno() .
            ' Сообщение ошибки: ' . mysqli_connect_error();
        exit;
    }

//решаем проблемы с кодировкой
    mysqli_query($dbcon, "SET NAMES 'utf8';");
    mysqli_query($dbcon, "SET CHARACTER SET 'utf8';");
    mysqli_query($dbcon, "SET SESSION collation_connection = 'utf8_general_ci';");

    $sqlCart = mysqli_query($dbcon,"SELECT login FROM users WHERE login = '$login';");
//Цикл по множеству записей и вывод необходимых записей 
    while($row = mysqli_fetch_array($sqlCart)) {
//Присваивание записей 
        $name = $row["name"];
    }

    // если они не пустые, то выводим нужное
echo "Здравствуй, " . $_SESSION['login'];
    $select = mysqli_query($dbcon, "SELECT * FROM clients;");

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
    echo "</table><br>";
    echo "<a href='exit.php'>Выход</a>";
    mysqli_close($dbcon);
}
?>
</body>
</html>