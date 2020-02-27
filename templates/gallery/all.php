<?php
global $config;
include ('download.php');//добавляем файл
echo '<h1>Галерея Ваших фотографий</h1>';
foreach ($data as $img) {
    echo '<div><img src="'.$config['app']['smallImagesPath'].'/'.$img.'" class = "image" alt="'.$img.'">';
    echo '<a href = "gallery.php?action=one&image='.$img.'">Увеличить</a>';
    echo '</div>';
}
?>