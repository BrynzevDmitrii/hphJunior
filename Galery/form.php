<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
            <p>Выберите файл</p>
        <input type="file" accept="img/*" name="photo">
        <input type="submit" value ="сохранить">
    </form>
</body>
</html>
