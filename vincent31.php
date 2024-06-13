<?php
    $upload = $_FILES['upload'];  //此處的'upload'是從vincent30.php的name=""
    // // echo gettype($upload);
    // foreach($upload as $k => $v) {
    //     echo "{$k} : {$v}<br/>";
    // }
    if($upload['error'] == 0) {
        if(move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")) {
            echo 'Upload Success';
        }else{
            echo 'Move Failure';
        }
    }else{
        echo 'Upload Failure';
    }


?>