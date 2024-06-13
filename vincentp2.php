<?php
    // 先連上資料庫，預設帳號:root，密碼:空白，匯入資料表:farm(先在資料庫上建立好並確定要匯入的欄位)
    $mysqli = new mysqli('localhost','root','','farm');
    // 設定編碼形式
    $mysqli->set_charset('utf8');

    // json資料來源，使用網站匯入
    $json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelStay.aspx');
    // 可以呼叫測試
    // echo $json;
    //json解碼
    $data = json_decode($json);
    // var_dump測試
    var_dump($data);
?>