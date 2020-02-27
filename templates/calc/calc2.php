<?php
include ('calc.php');//добавляем файл
?>

<form action="" method="post" multipart/form-data>
    <input type="number" name="a" placeholder="Введите первое число" required/><br>
    <input type="number" name="b" placeholder="Введите первое число" required/><br>
    <input type="submit" name="op" value="+" class="btn-primary btn"><br>
    <input type="submit" name="op" value="-" class="btn-primary btn"><br>
    <input type="submit" name="op" value="*" class="btn-primary btn"><br>
    <input type="submit" name="op" value="/" class="btn-primary btn"><br>
</form>
<?='Результат: ',calc()?>