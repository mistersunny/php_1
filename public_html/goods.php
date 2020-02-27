<?php


require '../engine/core.php';
/**
 * domain.com/gallery.php
 */
function routeIndex(){
    global $config;
    $card = getItemArray('select * from gb.goods');// получаем массив имен упорядоченный по убыванию просмотров
    if ($card) {
        echo render('goods/all',$card);// передаем адрес и массив из названий картинок для отрисовки в рендер
    }else {
        echo render('goods/forma');// передаем адрес в рендер
    }
    
}


function routeOne(){
    global $config;
    $name = $_GET['name'];
    $card = getItemArray("select * from gb.goods where name = '$name'");
    echo render('goods/one', $card);
}


function routeCreate(){
    global $config;
    echo render('goods/create');
}


function routeUpdate(){
    global $config;
    $name = $_GET['name'];
    $card = getItemArray("select * from gb.goods where name = '$name'");
    echo render('goods/update', $card);
}


function routeDelete(){
    global $config;
    $name = $_GET['name'];// помещаем значение $_GET['image'] в переменную $image
    $result = execute("DELETE FROM gb.goods WHERE name = '$name'");//удаляем соответсвующую запись из БД
if ($result) {
        echo render('goods/delete');// передаем в рендер адрес
    }else{
        echo render('site/error');// если не удалось удалить, то передаем в рендер адрес ошибки
    }
}

route();
?>