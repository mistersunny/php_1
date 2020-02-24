<?php
include ('download.php');
global $config;
?>
<a href = "gallery.php">Назад в галерею</a></div>
<a href = "gallery.php?action=delete&image=<?=$_GET['image']?>">Удалить</a></div>

Просмотров этой фотографии: <?=$data[0]?>
<br>
<img src="<?= $config['app']['bigImagesPath'].'/'.$_GET['image']?>">
