<?php
    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];
    $gender = $_REQUEST['gender'];
    $h = $_REQUEST['h'];
    echo "{$account} : {$passwd} : {$gender}<br />";
    foreach($h as $v) {
        echo "{$v}<br />";
    }

    $upload = $_FILES['upload'];
    // var_dump($upload);
    foreach($upload['error'] as $i => $errcode) {
        if($errcode == 0) {
            move_uploaded_file($upload['tmp_name'][$i], "upload/{$upload['name'][$i]}");
        }
    }
?>

<!-- 此處後端接收採用_POST或_GET，則前端傳遞也要使用_POST或_GET，如果後端使用_REQUEST則都可以接收 -->
<!-- $i為陣列中對應的值，先依據$errcode是否為0判斷上傳成功與否，再根據$i到tmp_name找到對應的檔案 -->
<!-- move_uploaded_file語法為從$upload['tmp_name'][$i]到upload資料夾，檔名為原始檔名 -->
