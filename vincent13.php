<?php
    $i = 0;                                              //如果在迴圈外先宣告，則for敘述句1可以省略
    for(printVincent() ; $i < 10 ;printLine()  ) {       //一開始$i=0->判斷$i是否<10->如果"是"印出$1->再次判斷$i是否<10....以此類推
        echo "{$i}<br />";                               //如果$i>10則跳脫迴圈不再執行
        $i++;                                            //for敘述句3省略後放到迴圈裡面
    }                                                    //for語法: for(敘述1(一定會執行);敘述2;敘述3) 

    function printVincent() {
        echo 'Vincent<hr />';
    }
    function printLine() {
        echo '<hr />';
    }
?>