<div><a href = "goods.php">Назад в каталог</a></div>
<div><a href = "goods.php?action=create">Добавить товар</a></div>
<div><a href = "goods.php?action=delete&name=<?=$data['name']?>">Удалить</a></div>

<h2>Введите новые данные карточки товара <?=$data['name']?></h2>

<?php 
// header("Location: goods.php?action=update&name=".$new_name);
include ('forma.php');
$old_name = $data['name'];
if (!empty($_POST)) {
    $new_name = $_POST['name'];
    $price = $_POST['price'];
    $create = execute('update gb.goods set name = "'.$new_name.'", price = "'.$price.'" where name = "'.$old_name.'"');
    if ($create == 'true') {
        header("Location: goods.php");
    }
}
?>