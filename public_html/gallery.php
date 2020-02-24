<?php


require '../engine/core.php';
/**
 * domain.com/gallery.php
 */

function routeIndex(){
    global $config;
//    $images = scandir($config['app']['smallImagesPath']);// сканируем директорию и создаем массив из содержимого данной директории
//    unset($images[0], $images[1]);// удаляем первые 2 элемента массива, так как, они являются ссылками(".""..")
    
    $imagesSql = getItemArray('select name from gb.images order by views desc;', 'name');// получаем массив имен упорядоченный по убыванию просмотров
    if ($imagesSql) {
        echo render('gallery/all', $imagesSql);// передаем адрес и массив из названий картинок для отрисовки в рендер
    }else {
        echo render('gallery/download');// передаем адрес в рендер
    }
}
/**
 * domain.com/?action=one&image=1.jpg
 */
function routeOne(){
    global $config;
    $image = $_GET['image'];// помещаем значение $_GET['image'] в переменную $image
    $view = getItemArray("select views from gb.images where name = '$image'", 'views');// поллучаем количество просмотров этой фото

    $filePath = $config['app']['bigImagesPath'].'/'.$image;
    if(file_exists($filePath)){//проверяем наличие указанного файла и если он есть то
        updateview($image);//увеличиваем количество просмотров этого файла на 1
        echo render('gallery/one', $view);// передаем в рендер адрес и кол-во просмотров
    }else{
        echo render('site/error');// если не удалось удалить, то передаем в рендер адрес ошибки
    }
}

/**
 * domain.com/?action=delete&image=1.jpg
 */
function routeDelete(){
    global $config;
    $image = $_GET['image'];// помещаем значение $_GET['image'] в переменную $image
    if (unlink($config['app']['smallImagesPath'].'/'.$image) && unlink($config['app']['bigImagesPath'].'/'.$image)) {//проверяем, если удалось удалить файл из обеих папок, то
        execute("DELETE FROM gb.images WHERE name = '$image'");//удаляем соответсвующую запись из БД
        echo render('gallery/delete');// передаем в рендер адрес
    }else{
        echo render('site/error');// если не удалось удалить, то передаем в рендер адрес ошибки
    }
}
route();