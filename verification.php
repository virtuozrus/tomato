<?php
session_start();
include 'config.php';
//заносим введенный логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
//заносим введенный пароль в переменную $password, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) {
    $password=$_POST['password'];
    if ($password =='') {
        unset($password);
    }
}

//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
if (empty($login) or empty($password)) {
    exit ("<body><div align='center'><br/><br/><br/><h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля! <br>" .
        "<a href='enter.php'><b>Назад</b> </a></h3></div></body>");
}

//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

//подключаемся к бд
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

//извлекаем из базы все данные о пользователе с введенным логином
$result = mysqli_query($dbcon,"SELECT * FROM users WHERE login='$login';");
$myrow = mysqli_fetch_array($result);
if (empty($myrow["password"])) {
    //если пользователя с введенным логином не существует
    exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами логин или пароль неверный. <br>" .
        "<a href='enter.php'><b>Назад</b> </a></h3></div></body>");
} else {
    //если существует, то сверяем пароли
    if ($myrow["password"]==$password) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['login']=$myrow["login"];
        $_SESSION['id']=$myrow["id"];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        header("Location:enter.php");
    } else {
        //если пароли не сошлись
        exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами логин или пароль неверный. <br>" .
            "<a href='enter.php'><b>Назад</b> </a></h3></div></body>");
    }
}
?>