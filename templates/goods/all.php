<h1> Каталог</h1>
<div>
<?php 
//var_dump($data);
foreach ($data as $key => $card) {?>
    <div style="border:1px solid black">
        <div>Товар: <a href = "goods.php?action=one&name=<?=$card['name']?>"><?=$card['name']?></a> Цена: <?=$card['price']?> </div>
        <div><a href = "goods.php?action=update&name=<?=$card['name']?>">Редактировать</a></div>
        <div><a href = "goods.php?action=delete&name=<?=$card['name']?>">Удалить</a></div>
    </div>
<?php }
?>
</div>