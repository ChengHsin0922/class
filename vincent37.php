<?php
    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');  
    
    $mysqli->query('DELETE FROM gift');  //這邊會清空表格，但是id是採用a..i自動遞增，所以仍然會繼續遞增
    $mysqli->query('ALTER TABLE gift AUTO_INCREMENT = 1');  //這邊設定a..i從1開始


    $json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx');
    // echo $json;
    $data = json_decode($json);
    // var_dump($data);
    
    foreach($data as $gift) {
        $sql = "INSERT INTO gift (name,addr,picurl)" . "VALUES ('{$gift->Name}', '{$gift->SalePlace}', '{$gift->Column1}')";

        $mysqli->query($sql);
    }
?>