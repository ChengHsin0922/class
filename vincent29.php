<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th {
        text-align: center;
        font-weight: bolder;
    }

    td {
        text-align: center;
    }
</style>
<body>
    
</body>
</html>
<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Time</th>
    </tr>
<?php
    $dir = "c:/xampp/htdocs";
    $fp = @opendir($dir) or die('傳承我的意志');   //在function前面加@會抑制錯誤訊息，根據布林值可以搭配or die()顯示訊息
    //echo gettype($fp);
    //echo '<br />';
    //var_dump($fp);  //型態stream=串流

    while ($fname = readdir($fp)) {  //先執行等號右邊資料，如果為true則執行{}裡面的事並重複迴圈，如果false則脫離迴圈，注意是一個=不是==
        $file = "{$dir}/{$fname}";
        echo '<tr>';
        echo "<td>{$fname}</td>";
        if(is_dir($file)) {
            echo "<td>Dir</td>";
            }else if(is_file($file)) {
                echo "<td>File</td>";
                }
            else{
                echo '<td></td>';
            }

            $mtime = date('Y-m-d H:i:s', filemtime($file));  //先透過filemtime($fname)取得本機上次修改時間，再用date()包起來修改格式
            echo "<td>{$mtime}</td>";
            
                    
                
            echo '</tr>';
                
        
        }

    

    // echo readdir($fp) . '<br />';  //. 代表此路徑this
    // echo readdir($fp) . '<br />';  //.. 代表上一層
    // echo readdir($fp) . '<br />';
    // echo readdir($fp) . '<br />';
    // var_dump(readdir($fp)) . '<br />';

    closedir($fp);
?>
</table>

<!-- 讀取指定路徑下的所有檔案 -->