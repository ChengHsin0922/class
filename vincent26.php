<?php
    define('W',400);
    define('H',20);
    // $rate = 23;   //50%，此處透過13行的int可以轉成任意%

    $rate = 0;   //預設為0
    if (isset($_GET['rate'])) {  //如果rate有設定值則根據設定值調整
        $rate = $_GET['rate'];
    }
    //1.畫布
    $img = ImageCreate(400, 20);
    $img2 = ImageCreate(400, 20);
    
    //2.作畫
    $yellow = imagecolorallocate($img,255, 255, 0);
    $red = imagecolorallocate($img,255, 0, 0);
    imagefilledrectangle($img, 0, 0, W, H, $yellow);  //從左上(0,0)到(400,20)畫上黃色
    imagefilledrectangle($img, 0, 0, (int)(W*$rate/100), H, $red);
    //3.輸出
    header("content-type: image/jpeg");
    imagejpeg($img);

    //4.清除
    imagedestroy($img);
?>

<!-- php只有變數有大小寫區分 -->
<!-- 記得php開始標籤之前不能有任何輸出(包含備註) -->