<?php 
    for($i = 0; $i < 52; $i++) {
        $temp = rand(0, 51);

        //檢查是否重複的機制
        $isRepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($temp == $poker[$j]) {
                //重複了
                $isRepeat = true;
                break;
            }
        }
        if (!$isRepeat) {      //!->true變false，false變true  也可以寫成$isRepeat == false
            $poker[] = $temp;
        }else {
            $i--;              //如果重複了次數就退回一次重跑一次迴圈
        }
    }
    foreach($poker as $card) {
        echo "{$card}<br />";
    }
?>