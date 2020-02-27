<?php

include ('calc.php');//добавляем файл
?>
<form method="post" action="" enctype="multipart/form-data">
<table>
    <caption>Калькулятор</caption>
    <tr>
        <th>Первое число</th><th>Действие</th><th>Второе число</th><th>Результат</th>
    </tr>
  <tr>
      <td>
            <input type="number" id="first" name="a" placeholder="Введите первое число" required/>       
      </td>
      <td>
            <select name="op" id="operation" required> 
            <option selected disabled>Выберите действие </option>
            <option value="+">+</option> 
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            </select>
      </td>
      <td>
              <input type="number" id="second" name="b" placeholder="Введите второе число" required/>  
      </td>
      <td>
<div id="xxx"><?=calc()?></div>
      </td>
    </tr>
    <tr>
    <td colspan="4" height="50">
        <input type="submit" id="submit" name="submit" value="Давайте посчитаем" class="button"/>
    </td>
    </tr>
</table>  
</form>
