<!-- 質數表格練習，提示:將數字是否能被自己小的任何數字整除?如果能就break迴圈 -->

<!-- 進階練習:讓每列的背景顏色對調 -->
<style>
    tr:nth-of-type(even)>td:nth-of-type(odd) {      /*偶數tr的奇數td*/
        background-color: lightblue;
    }
    tr:nth-of-type(even)>td:nth-of-type(even) {      /*偶數tr的偶數td*/
        background-color: lightpink;
    }
    tr:nth-of-type(odd)>td:nth-of-type(even) {       /*奇數tr的偶數td*/
        background-color: lightgreen;
    }
    tr:nth-of-type(odd)>td:nth-of-type(odd) {        /*奇數tr的奇數td*/
        background-color: lightsalmon;
    }

</style>

<?php
    $rows = 2; $cols = 4; $start = 2;
    if (isset($_GET['rows'])) {
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];
        $start = $_GET['start'];
    }
?>

<h1>Vincent Big Company</h1>
<hr />
<form action="">
    Rows: <input type="number" name="rows" value="<?php echo '$rows'; ?>">
    Cols: <input type="number" name="cols" value="<?php echo '$cols'; ?>">
    Start: <input type="number" name="start" value="<?php echo '$start'; ?>">
    <input type="submit" value="change" />
</form>
<hr />


<table border="1" width="100%">

    <?php
    define('ROWS', $rows);  //控制幾行
    define('COLS', $cols);  //控制幾列
    define('START', $start); //控制開始數字
    //-----------------------------------------------
    for ($k = 0; $k < ROWS; $k++) {       
        echo '<tr>';
        for ($j = START; $j < START + COLS; $j++) {
            $newj = $j + $k * COLS;
            echo '<td>';
            for ($i = 1; $i <= 9; $i++) {    
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br / >";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>

</table>