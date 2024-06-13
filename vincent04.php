<?php
//變數名稱永遠 $開頭 [a-z A-Z _][a-z A-Z 0-9 _]* 第一個字母為英文大小寫或_，第二個字母開始多了數字
    $var1 = 'Vincent';
    echo gettype($var1);
    echo '<hr>';
    var_dump($var1);  //詳細版的gettype，可用於除錯

?>