<?php
if (isset($_POST["fio"])) {
    $sql = mysqli_query($link, "INSERT INTO `clients` (fio,date,passport,mobile,address,email,target) VALUES ('{$_POST['fio']}', '{$_POST['date']}', {$_POST['passport']}, {$_POST['mobile']}, '{$_POST['address']}', '{$_POST['email']}', '{$_POST['target']}')");
    if ($sql) {
        echo '<p id="green">Данные успешно добавлены.</p>';
    } else {
        echo '<p id="red">Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}
?>