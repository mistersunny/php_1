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
    $result = mysqli_query($connection, $sql);

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

    if ($result->num_rows != 0){//проверяем, получили ли мы объект
        while ($row = mysqli_fetch_assoc($result)) {//выполняем цикл для каждой полученной строки
            if (!empty($param)) {// если при запуске был передан параметр, то
                $rows[] = $row[$param];//помещаем в массив значение элемента полученного массива по переданному параметру
            } else {// если не был указан, то
                $rows[] = $row;//помещаем в массив полученный массив
            }
        }
        return $rows;//возвращаем массив
    }
}


/**
 * Простое выполнение SQL запроса к базе данных
 * @param string $sql
 * @return bool|mysqli_result
 */
function execute(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);
    return $result;
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