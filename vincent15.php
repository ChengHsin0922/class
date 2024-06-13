<?php 
    $a[] = 12;
    var_dump($a); echo '<hr />';
    $a[] = 12.3;
    $a[] = 'Vincent';
    $a[] = true;
    var_dump($a); echo '<hr />';
    $a[1] = 33;
    $a[7] = 77;
    $a['name'] = 'Peter';
    $a['gender'] = true;
    $a['age'] = 18;
    var_dump($a); echo '<hr />';
    foreach($a as $k => $v) {
        echo "{$k} : {$v}<br />";
    }
    echo '<hr />';
    // 擲骰子100次紀錄每個點數出現的次數，提示:使用rand、迴圈、每個點數設變數，直到就++

    $dice = rand(1, 100);
    echo "$dice";
    
?>