<?php
    session_start();
    session_destroy();          //session_destory可以清除全部變數
    //unset($_SESSION['rand']); //unset可以清除變數，但是如果變數很多稍嫌麻煩
?>