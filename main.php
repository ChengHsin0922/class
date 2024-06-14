I am Main Page
<hr/>
<?php
    include('vincentapis.php');
    //透過session將login的資料傳值到main
    session_cache_expire(1);  //
    session_start();

    $member = $_SESSION['member'];
    echo $member->getAccount();

    //$ary = [1,2,3,4];
    // $rand = $_SESSION['rand'];
    //$ary = $_SESSION['ary'];
    //var_dump($ary);
    // echo $rand;

    
?>
<hr />
<a href="logout.php">Logout</a>