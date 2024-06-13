<!-- 使用者在頁面按下enter之後會將以下form資料轉成url，後端再透過action指定vincent08處理後回傳 -->
<?php
    $r = $x = $y = '';
    if (isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $r = $x + $y;
        //echo "{$x} + {$y} = {$r}";
    }
?>
<form>  
    <input name="x" value="<?php echo $x; ?>" />
    +
    <input name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <span><?php echo $r; ?></span>
</form>
