<?php
$poker = range(0, 51);
shuffle($poker);
foreach ($poker as $k => $v) {
    echo "{$k} : {$v}<br />";
}
?>
<hr />
<?php
$players = [[], [], [], []];   //等於$players = array(array(),array(),array(),array()); 二維陣列
foreach ($poker as $i => $card) {
    $players[$i % 4][(int)($i / 4)] = $card;     //4名玩家所以除4取餘數，發牌每4張一個循環所以除4取商數
}

foreach ($players[0] as $card) {      //驗算每家拿到的牌是否跟洗牌的結果一樣
    echo "{$card}<br />";
}

for($i = 0; $i<count($players); $i++) {
    sort($players[$i]);
}
?>

<style>
    tr {
        display: block;
    }
    
</style>
<table border="1">
    <?php
    $colors = ['&spades;', '<font color=red>&hearts;</font>', '<font color=red>&diams;</font>', '&clubs;'];
    $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
    foreach ($players as $player) {    //很多家的每一家
        sort($player);
        echo '<tr>';
        foreach ($player as $card) {    //每一家的牌
            $c = (int)($card / 13);
            $v = $card % 13;
            echo "<td>{$colors[$c]}{$values[$v]}</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
&spades;&hearts;&diams;&clubs;