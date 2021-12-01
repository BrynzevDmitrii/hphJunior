<?php
include "admin/config.php";
include "hrf.php";
$sql ="select * from bdimagescars";
$res = mysqli_query($connect, $sql) ;
$data = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Таблица картинок</h1>
    </header>
    <main>
        <ul class="row">
            <li class="row_title">foto</li>
            <li class="row_title">name</li>
            <li class="row_title">description</li>
            <li class="row_title">date</li>
        </ul>
        <?for($i=2;$i<count($img);$i++){?>
        <?if($data = mysqli_fetch_assoc($res)) :?>
        
        <?="<ul class='column'>
            <li class = 'column_name'><a href = '../img/{$img[$i]}'><img src = '../smollimg/{$img[$i]}'></a></li>
            <li class = 'column_name'> {$data['name']} </li>
            <li class = 'column_name'> {$data['description']} </li>
            <li class = 'column_name'> {$data['data']} </li>
        </ul>"?>
        <?endif;?>
    <?}?>
    
        
    </main>
</body>
</html>