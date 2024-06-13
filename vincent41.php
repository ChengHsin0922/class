<?php
    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');
    $sql = 'SELECT id, name, addr FROM gift';
    $result = $mysqli->query($sql);
    $row = $result->fetch_object();
    // var_dump($row);
    // while($row = $result->fetch_array()) {
    //     echo "{$row['id']} : {$row['name']}<br />";
    // }
    while($row = $result->fetch_object()) {
        echo "{$row->id} : {$row->name} : {$row->addr}<br />";
    }



?>

<!-- fetch每次只會抓一筆資料(一個 row或是改成物件obj) -->