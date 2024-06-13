<!-- 使用者在頁面按下enter之後會將以下form資料轉成url，後端再透過action指定vincent08處理後回傳 -->
<?php
$r = $x = $y = $op = '';
if (isset($_GET['x']) && isset($_GET['y'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];

    if ($op == '1') {
        $r = $x + $y;
    } else if ($op == '2') {
        $r = $x - $y;
    } else if ($op == '3') {
        $r = $x * $y;
    } else if ($op == '4') {
        $r1 = (int)($x / $y);
        $r2 = $x % $y;
        $r = "{$r1} ...... {$r2}";
    }
    //echo "{$x} + {$y} = {$r}";
}
?>

<form>
    <input name="x" value="<?php echo $x; ?>" />
    <select name="op">
        <option value="1" <?php echo $op=='1'?'selected':'';?>>+</option>
        <option value="2" <?php echo $op=='2'?'selected':'';?>>-</option>
        <option value="3" <?php echo $op=='3'?'selected':'';?>>X</option>
        <option value="4" <?php echo $op=='4'?'selected':'';?>>/</option>
    </select>
    <input name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <span><?php echo $r; ?></span>
</form>