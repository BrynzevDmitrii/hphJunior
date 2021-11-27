<?php
$img = scandir("img");
for($i=2;$i< count($img);$i++){?>
<a href="full_image.php?file=<?=$img[$i]?>"><img src="img/<?= $img[$i]?>" width = "150" alt=""></a>
<?php
}?>