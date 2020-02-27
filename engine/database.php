<?php
$connection = mysqli_connect(
    $config['db']['host'],
    $config['db']['user'],
    $config['db']['password'],
    $config['db']['database']
);

/**
 * Получение одной строки из базы данных по SQL запросу
 * @param string $sql
 * @return array|null
 */
function getItem(string $sql) {
    global $connection;
//    $sql = mysqli_real_escape_string($connection, $sql);
    $result = mysqli_query($connection, $sql);


    if ($result === false ) {
        echo mysqli_error($connection);
        die();
    }

    $row = mysqli_fetch_assoc($result);
    return $row;
}

/**
 * Получение нескольких строк из базы данных по SQL запросу
 * @param string $sql
 * @return array
 */
function getItemArray(string $sql, $param="") {
    global $connection;
    $result = mysqli_query($connection, $sql);
    if ($result === false ) {//если запрос не выполнен то
        echo mysqli_error($connection);//выводим полученную ошибку
        die();// прекращаем выполнение кода
    }
    $number_rows = mysqli_num_rows($result);//получаемых количество полученных строк
    $rows = [];// объявляем пустой массив
    if (!empty($param)) {// проверяем получили мы параметр при вызове функции, еси да то
        while ($row = mysqli_fetch_assoc($result)) {//запускаем цикл по каждой полученной строке
            $rows[] = $row[$param];// помещаем в массив все значения с указанным параметром
        }
    }
    if ($number_rows>1) {// если количество полученных строк >1 то
        while ($row = mysqli_fetch_assoc($result)) {//запускаем цикл по каждой полученной строке
            $rows[] = $row;// помещаем в массив массивы по каждой строке
        }
    }
    if ($number_rows == 1) {// если количество полученных строк =1 то
        while ($row = mysqli_fetch_assoc($result)) {
            $rows = $row;// помещаем в массив значения этой строки
        }
    }
    // var_dump($rows);
    return $rows;// возвращаем сформированный массив
mysqli_free_result($result);// освобождаем память

}


/**
 * Простое выполнение SQL запроса к базе данных
 * @param string $sql
 * @return bool|mysqli_result
 */
function execute(string $sql) {
    global $connection;

    $result = mysqli_query($connection, $sql);
    if ($result === false ) {//если запрос не выполнен то
        echo mysqli_error($connection);//выводим полученную ошибку
        die();// прекращаем выполнение кода
    }
    return $result;
    // var_dump($result);
}
/**
 * +1 к количеству просмотров
 * @param string $sql
 * @return bool|mysqli_result
 */
function updateview(string $name){
    global $connection;
    $sql = "SET SQL_SAFE_UPDATES = 0;
            UPDATE gb.images SET views = views + 1 where name = '$name';
            SET SQL_SAFE_UPDATES = 1;";
    $result = mysqli_multi_query($connection, $sql);
}


/**
 * Возврат ID последней операции вставки
 * @return int
 */
function lastInsertedId() {
    global $connection;
    $result = mysqli_insert_id($connection);
    return (int)$result;
}
?>