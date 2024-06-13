<?php
    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');

    $name = 'peter';
    $tel = '123'; 
    $birthday = '1999-06-04';
    
    $sql = 'INSERT INTO cust (name, tel, birthday) VALUES (?,?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss',$name,$tel,$birthday);
    $stmt->execute();



?>
<!-- $stmt = $mysqli->prepare($sql);  prepare完之後會傳回$stmt -->
<!--  -->