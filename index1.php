<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>
        <?php
    $number = 1;
    $lessonNamber = "lesson $number";
     echo "$lessonNamber"?>
     </title>
</head>
<body>
    
<?php 

$date = date("Y");
$name = "User";
echo "<h1> helo $name, welcome to my site written in php </h1>
<section>
$date
</section>"
?>
</body>
</html>

