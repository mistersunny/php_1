<div><a href = "goods.php">Назад в каталог</a></div>

<h1>Создание карточки товара</h1>

<?php 
include ('forma.php');
if (!empty($_POST)) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $good = getItemArray("select * from gb.goods where name = '$name'");
    if (empty($good)) {
        $create = execute('insert into gb.goods 
        (name, price, created_at) values 
        ("'.$name.'", "'.$price.'" ,'.time().')');
        echo ($create == 'true' ? 'Карточка товара '.$name.' успешно создана': 'Что то пошло не так!');
    }else {
        echo 'Такой товар, уже соществует';
        echo render('goods/update');
    }
}
?>