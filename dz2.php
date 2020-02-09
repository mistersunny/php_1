<?php
// 1.
echo 'Задание 1.<br/>';
$a = rand(0,200);
$b = rand(0,200);
echo 'a = ' , "$a <br/>" , 'b = ' , "$b <br/>";
if ($a >= 0 && $b >= 0) echo $a - $b;
elseif ($a < 0 && $b < 0) echo $a * $b;
else echo ($a + $b);

// 2.
echo '<br/>Задание 2.<br/>';
$a = rand(0,15);
switch ($a) {
    case '0';
    case '1';
    case '2';
    case '3';
    case '4';
    case '5';
    case '6';
    case '7';
    case '8';
    case '9';
    case '10';
    case '11';
    case '12';
    case '13';
    case '14';
    case '15';
        for ($i=$a; $i<=15; $i++) echo $i." ";
    break;
    // Либо такой вариант. Хотя вообще не понятно зачем здесь нужен switch
    // case '0':
    //     echo 0123456789101112131415';
    // break;
    // case '1':
    //     echo '123456789101112131415';
    // break;
    // case '2':
    //     echo '23456789101112131415';
    // break;
    // case '3':
    //     echo '3456789101112131415';
    // break;
    // case '4':
    //     echo '456789101112131415';
    // break;
    // case '5':
    //     echo '56789101112131415';
    // break;
    // case '6':
    //     echo '6789101112131415';
    // break;
    // case '7':
    //     echo '789101112131415';
    // break;
    // case '8':
    //     echo '89101112131415';
    // break;
    // case '9':
    //     echo '9101112131415';
    // break;
    // case '10':
    //     echo '101112131415';
    // break;
    // case '11':
    //     echo '1112131415';
    // break;
    // case '12':
    //     echo '112131415';
    // break;
    // case '13':
    //     echo '131415';
    // break;
    // case '14':
    //     echo '1415';
    // break;
    // case '15':
    //     echo '15';
    // break;
    default:
        # code...
        break;
}
// 3.
echo '<br/>Задание 3.<br/>';
$a = rand(-10,10);
$b = rand(-10,10);
function addition($a, $b){//сложение
    return $a + $b;
}
function subtraction($a, $b){//вычитание
    return $a - $b;
}
function multiplication($a, $b){//умножение
    return $a * $b;
}
function division($a, $b){//деление
    return $b <> 0 ? $a / $b : 'нельзя делить на ноль';
}
echo "Результат сложения $a и $b = " , addition($a, $b) , '<br/>' . 
    "Результат вычитания $a и $b = " , subtraction($a, $b) , '<br/>' . 
    "Результат умножения $a и $b = " , multiplication($a, $b) , '<br/>' . 
    "Результат деления $a и $b = " , division($a, $b);
// 4.
echo '<br/>Задание 4.<br/>';
function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case '+':
            return addition($arg1, $arg2);
            break;
        case '-':
            return subtraction($arg1, $arg2);
            break;
        case '*':
            return multiplication($arg1, $arg2);
            break;
        case '/':
            return division($arg1, $arg2);
            break;
        default:
            # code...
            break;
    }
}
echo mathOperation(2,4,'+');
// 6.
echo '<br/>Задание 6.<br/>';

$val = 4;
function power($val=3, $pow=3){
    if ($pow == 2) return $val * $val;
    else return $val * power($val,$pow-1);
}
echo power();

// 7.
echo '<br/>Задание 7.<br/>';
function rus_time(){
    date_default_timezone_set('Europe/Moscow');
    $h = date("G");
    $m = date("i");
    $chas = [1,21];
    $chasa = [2,3,4,22,23];
    $minuta = [1,21,31,41,51];
    $minuti = [2,3,4,22,23,24,32,33,34,42,43,44,52,53,54];

    if (in_array($h, $chas)) $h = $h . ' час';
    elseif (in_array($h, $chasa)) $h = $h . ' часа';
    else $h = $h . ' часов';

    if (in_array($m, $minuta)) $m = $m . ' минута';
    elseif (in_array($m, $minuti)) $m = $m . ' минуты';
    else $m = $m . ' минут';

    echo "$h $m";
}
rus_time();
?>