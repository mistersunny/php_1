
<div><a href = "goods.php">Назад в каталог</a></div>
<div><a href = "goods.php?action=update&name=<?=$data['name']?>">Редактировать</a></div>
<div><a href = "goods.php?action=create">Добавить</a></div>
<div><a href = "goods.php?action=delete&name=<?=$data['name']?>">Удалить</a></div>
<?php 
if (!empty($data)) { ?>
    <h3>Карточка товара:</h3>
    <p>Наименование: <?=$data['name']?></p>
    <p>Цена: <?=$data['price']?>рублей</p>
    <p>Время создания: <?= date('H:i:s d.m.yy', $data['created_at']) ?></p>

<?php } ?>