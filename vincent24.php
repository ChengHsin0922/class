<?php
    include('vincentapis.php');


    $myid = 'A123456789';
    if(checkTWId($myid)) {
        echo 'ok';
    }else{
        echo'XX';
    }

?>
    <hr />
    random : <?php echo createTWIdByRandom(); ?><br />
    area B : <?php echo createTWIdByArea('B'); ?><br />
    gender false : <?php echo createTWIdByGender(false); ?><br />
    both C, true : <?php echo createTWIdByBoth('C', true); ?><br /> 