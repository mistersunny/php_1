<?php
include ('download.php');
global $config;
extract($data);

?>
<div><a href = "gallery.php">Назад в галерею</a></div>
<div><a href = "gallery.php?action=delete&image=<?=$img['name']?>">Удалить</a></div>

Просмотров этой фотографии: <?=$img['views']?>
<br>
<img src="<?= $config['app']['bigImagesPath'].'/'.$img['name']?>">

<form action="gallery.php?action=createcomment" method="post">
    <label for="comment-text">Комментарий</label>
    <input id="comment-text" name="text" type="text"/>
    <input type="hidden" name="image_id" value="<?=$img['id']?>">
    <input type="submit" class="btn-primary btn">
</form>

<?php
if (!empty($comments)) {?>
    <h3>Комментарии:</h3>
    <?php foreach ($comments as $comment) {
        if (is_array($comment)){?>
            <p><strong><?= date('d.m.yy H:i:s', $comment['created_at']) ?></strong>| <?= $comment['text'] ?> </p>
        <?php }
    }
    if (!array_key_exists(0,$comments)) {?>
        <p><strong><?= date('d.m.yy H:i:s', $comments['created_at']) ?></strong>| <?= $comments['text'] ?> </p>
        <?php } ?>
    <?php }
?>
