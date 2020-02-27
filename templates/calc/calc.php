<?php 
function calc() {
    if(isset($_POST['op']) && !empty($_POST['op'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];
        switch ($op) {
            case '+':
                return $a + $b;;
                break;
            case '-':
                    return $a - $b;
                break;
            case '*':
                return $a * $b;
                break;
            case '/':
                if ((int)$b !== 0) {
                    $rezult = $a / $b; $z = "/";
                } else {
                $rezult = 'На ноль делить нельзя';
                return $rezult;
                }
                break;
        }
    return $rezult;
    }else{
        return $rezult = 'выберите действие';
    }
}
?>
<div><a href = "calc.php?action=calc1">Первый калькулятор</a>
<a href = "calc.php?action=calc2">Второй калькулятор</a></div>