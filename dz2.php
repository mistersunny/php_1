<?php
// 1.
echo 'Задание 1.<br/>';
$a = rand(-10,10);
$b = rand(-10,10);
echo 'a = ' , "$a <br/>" , 'b = ' , "$b <br/>";
if ($a >= 0 && $b >= 0) echo $a - $b;
elseif ($a < 0 && $b < 0) echo $a * $b;
else echo $a + $b;

// 2.
echo '<br/>Задание 2.<br/>';
$a = rand(0,15);
switch ($a) {
    case $a;
        for ($i=$a; $i<=15; $i++) echo $i." ";
    break;
    // Либо такой вариант. Хотя вообще не понятно зачем здесь нужен switch
    // case '0':
    //     echo 0';
    // case '1':
    //     echo '1';
    // case '2':
    //     echo '2';
    // case '3':
    //     echo '3';
    // case '4':
    //     echo '4';
    // case '5':
    //     echo '5';
    // case '6':
    //     echo '6';
    // case '7':
    //     echo '7';
    // case '8':
    //     echo '8';
    // case '9':
    //     echo '9';
    // case '10':
    //     echo '10';
    // case '11':
    //     echo '11';
    // case '12':
    //     echo '12';
    // case '13':
    //     echo '13';
    // case '14':
    //     echo '14';
    // case '15':
    //     echo '15';
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

$val = rand(-5, 5);
$pow = rand(-5, 5);
function power($val, $pow){
    return  ($pow < 0 ? power(1/$val, -$pow):
            ($pow == 0 ? 1 : 
            ($pow == 1 ? $val :
            $val * power($val, $pow-1))));
}
echo power($val, $pow);

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
    $h = (in_array($h, $chas) ? $h . ' час' :
         (in_array($h, $chasa) ? $h . ' часа' :
         $h . ' часов'));

    $m = (in_array($m, $minuta) ? $m . ' минута' :
         (in_array($m, $minuti) ? $m . ' минуты' :
         $m . ' минут'));

    echo "$h $m";
}
rus_time();
?>