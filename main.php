<style>
    form {
        display: grid;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    h3 {
        display: grid;
        justify-content: center;
    }

    span {
        display: flex;
        justify-content: center;
    }

    .imgcontainer {
        display: flex;
        justify-content: center;
    }
</style>
<?php
    include('vincentapis.php');
    //透過session將login的資料傳值到main
    // session_cache_expire(1); 
    session_start();
    if (!isset($_SESSION)) header('Location: login.php');
    if (time() > $_SESSION['now'] + 10) {header('Location: logout.php');}  //逾時設定

    $member = $_SESSION['member'];

    // $member = $_SESSION['member'];
    // echo $member->getAccount();
    
    //$ary = [1,2,3,4];
    // $rand = $_SESSION['rand'];
    //$ary = $_SESSION['ary'];
    //var_dump($ary);
    // echo $rand;
    
    
?>
<h3>I am Main Page</h3>
<hr/>
<span>Welcome, My Nigga <?php echo $member->getRealname(); ?></span>
<div class="imgcontainer">
    <img src="data:image/png;base64, <?php echo base64_encode($member->getIcon())?>" />
</div>
<hr/>
<h3><a href="logout.php">Logout</a></h3>