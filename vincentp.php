<table border="1">
    <tr>
        <?php
        $num = 1;
        for ($n = 1;$n < 11; $n++) {
            echo '<tr>';
            for ($i = 1; $i < 11; $i++) {
                echo "<td>$num</td>";
                $num++;
            }
            echo '</tr>';
        }
        ?>
    </tr>
</table>