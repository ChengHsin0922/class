<?php
    $score = rand(0,100);
    echo "Score = {$score}<br />";
    if ($score >= 90) {
        echo 'A';
    }
    else if ($score >= 80) {
        echo 'B';
    }
    else if ($score >= 70) {
        echo 'C';
    }
    else if ($score >= 60) {
        echo 'D';
    }
    else {
        echo 'YOU SHOULD NOT PASS!!';
    }

    

?>
<!-- 以上示範過濾機制，透過將巢狀if簡化(如果if 裡面只放一段描述句，{}可以省略) -->