
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
    <header class = 'header' >
        <h1 class = 'header__title'>Галерея для 4 урока</h1>
    </header>
    <main class = 'main'>
        <ul class="main__list-header">
            <li class="main_item-header">Картинки</li>
        </ul>
        <ul class="main__list-main">
            <li class="main__item-main">
                <?= require("scan.php")?>
            </li>
        </ul>
  
    </main>
    <footer>
        <?=require("form.php")?>
    </footer>
</body>
</html>