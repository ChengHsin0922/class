<?php
    $year = rand(0,2024);
    echo "{$year}";
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                //潤
            }else{
                //平
            }
        }
        else{
            //潤
        }
    }else {
        //平
    }
?>