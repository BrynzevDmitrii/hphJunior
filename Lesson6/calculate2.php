<?php
error_reporting(0);
if ($_POST['do']) {
    require "MathOperation.php";
    if($_POST['a']==null||$_POST['b']==null){echo "Вы не ввели ни одного числа" ;}
    $result = implode(" ", array($_POST['a'], $_POST['do'], $_POST['b']))." = ".mathOperation($_POST['a'], $_POST['b'], $_POST['do']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php6.2</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a"><br>
        <input type="submit" value="+" name="do">
        <input type="submit" value="-" name="do">
        <input type="submit" value="*" name="do">
        <input type="submit" value="/" name="do">
        <br>
        <input type="text" name="b"><br>
    </form>
    <p><?= $result ? $result : ""; ?></p>
</body>
</html>

