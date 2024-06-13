<?php
    $weight = 77;
    echo 'Vincent weight = ' . $weight . 'kg'; //php"字串"相加使用"."，數字相加才使用"+"
    echo '<hr>';
    echo "Vincent weight = $weight kg"; //簡單寫法
    echo '<hr>';
    echo "Vincent weight = {$weight}kg"; //如果變數跟後面字串不要有空格的寫法:將變數用{}包起來，{}用於辨識變數
?>