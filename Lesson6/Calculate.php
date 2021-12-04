<?php
error_reporting(0);
if ($_POST['do']) {
    require "MathOperation.php";
    if($_POST['a'] == null||$_POST['b']==null){echo "Вы не ввели ни одного числа" ;}
    $result = implode(" ", array($_POST['a'], $_POST['do'], $_POST['b']))." = ".mathOperation($_POST['a'], $_POST['b'], $_POST['do']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php6.1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="Введите число"><br>
        <select name="do">
            <option value="+">сложение</option>
            <option value="-">вычитание</option>
            <option value="*">умножение</option>
            <option value="/">деление</option>
        </select><br>
        <input type="text" name="b" placeholder="Введите число"><br>
        <input type="submit" value="Посчитать">
    </form>
    <p><?= $result ? $result : ""; ?></p>
</body>
</html>