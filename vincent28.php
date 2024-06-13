<?php
    //1.畫布
    $img = imagecreatefromjpeg("sponge.jpg");
    
    // echo gettype($img);
    // $img2 = ImageCreate(400, 20);
    
    //2.作畫  加上浮水印
    $white = imagecolorallocate($img, 255, 255, 255);
    imagettftext($img, 30, -30, 100, 100, $white, 'fonts/myfont.ttf', '快點吹!');

    //3.輸出
    header("content-type: image/jpeg");
    imagejpeg($img);

    imagejpeg($img, 'dir1/myspoge.jpg');

    //4.清除
    imagedestroy($img);
?>

<!-- php只有變數有大小寫區分 -->
<!-- 記得php開始標籤之前不能有任何輸出(包含備註) -->