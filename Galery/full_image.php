<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="store-big">
        <img class= "big-img" src="img/<?=$_GET['file']?>" alt="fgrt"><br>
    </div>
    <button class= "big-img-btn" type = "buttton">
        <a class="href-btn" href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>
    </button>
</body>
</html>

