<?php
$path = "img/".$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)){
    header("Location:index.php");
}