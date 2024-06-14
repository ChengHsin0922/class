<?php
    //如果有收到max的值，而且字串長度>0(排除空字串型態，因為永遠會收到值)，就將$max帶入下行的參數，否則$max=10
    $max = isset($_REQUEST['max']) && strlen($_REQUEST['max']) > 0 ? $_REQUEST['max'] : 10;
    echo rand(1, $max);
?>