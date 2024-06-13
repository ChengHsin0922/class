<?php 
    $a = array(1, 2, 3, 4);
    //var_dump($a);
    $a[7] = 100;        //php會將陣列沒有的數字加進去
    var_dump($a);

    for($i= 0;$i <= 7; $i++) {
        echo "$a[$i]<hr />";
    }
    echo "<hr />";
    foreach ($a as $k => $v) {          //尋訪每個$a陣列內的值當作$v印出來
        echo "{$k} : {$v}<br />";
    }
?>