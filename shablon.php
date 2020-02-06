<?php
$topic = 'А ты знаешь какой сейчас год?';
$title = 'Первое домашнее задание';
$year = date('Y');
$a = 4;
$b = 8;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $topic ?></h1>
    <p>Пздравляю тебя, мой друг, сейчас на дворе <?php echo $year ?>-й год.</p>
    А сейчас мы будем менять значение переменных местами.<br>
    У нас есть переменные a = <?php echo $a ?> и b = <?php echo $b ?>.<br>
    <?php
    $a+=$b;
    $b=$a-$b;
    $a-=$b;
    ?>
    А теперь a = <?php echo $a ?> и b = <?php echo $b ?>.
    
</body>
</html>