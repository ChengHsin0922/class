<?php
    $info = gd_info();
    foreach($info as $k => $v) {
        echo "{$k} : {$v}<br />";
    }

?>

<!-- 驗證extension_gd有正確使用 -->