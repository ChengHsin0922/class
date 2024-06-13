<?php
    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');

    $id = '2';
    $sql = 'DELETE from cust WHERE id = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();



?>
<!-- $stmt = $mysqli->prepare($sql);  prepare完之後 -->