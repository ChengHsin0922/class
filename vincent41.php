<?php
    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');
    $sql = 'SELECT * FROM gift';
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    var_dump($row);
?>

<!-- fetch每次只會抓一筆資料(一個row) -->