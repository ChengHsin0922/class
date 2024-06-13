<?php
    $fp = @fopen('dir1/ns1hosp.csv', 'r') or exit ('Damn!');  //開啟串流
    // while ($line = fgets($fp)) {
    //     echo "{$line}<br />";
    // }

    $mysqli = new mysqli('localhost','root','','iii');  //這邊是連上資料庫
    $mysqli->set_charset('utf8');  

    $mysqli->query('DELETE FROM host');  //這邊會清空表格，但是id是採用a..i自動遞增，所以仍然會繼續遞增
    $mysqli->query('ALTER TABLE host AUTO_INCREMENT = 1');  //這邊設定a..i從1開始
    fgetcsv($fp);
    while($line = fgetcsv($fp)) {
        // echo "{$line[2]} : {$line[4]} : {$line[7]}<br />";
        $hname = $line[2];
        $addr = $line[4];
        $tel = $line[7];
        $lat = $line[5];
        $lng = $line[6];
        $sql = "INSERT INTO host (hname,addr,tel,lat,lng)" . "VALUES ('{$hname}','{$addr}','{$tel}',$lat,$lng)";
        
        $mysqli->query($sql);
    }
    fclose($fp);  //關閉串流

    

?>
<!-- $fp = @fopen('dir1/ns1hosp.csv', 'r') or exit ('Damn!'); 'r'=唯讀模式 -->
<!-- 注意以上程式只能跑一次，不然會一直增加資料 -->