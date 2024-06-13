<style>
    table {
        width: 100%;
    }

    table img {
        width: 300px;
        height: 200px;
    }
</style>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'iii');
$mysqli->set_charset('utf8');

define('RPP', 10);   //rows per page
$rpp = RPP;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$prev = $page == 1 ? 1 : $page -1;
$next = $page +1;
$start = ($page - 1) * RPP;

$key = '';
$sql = 'SELECT id, name, addr, picurl FROM gift';
// $sql = 'SELECT id name, addr FROM gift';
if (isset($_GET['key']) && strlen($_GET['key']) > 0){
        $key = $_GET['key'];
        $skey = "%{$key}%";
        $sql .= ' WHERE name LIKE ? OR addr LIKE ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss', $skey, $skey);
}else {
    $sql .= ' LIMIT ?, ?';   //LIMIT用法從第?筆開始取?筆
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ii', $start, $rpp);
}




?>
<form action="">
    Keyword: <input name="key" value="<?php echo $key;?>"/>
    <input type="submit" value="Search" />
</form>
<hr />

<a href="?page=<?php echo $prev; ?>">Prev</a> | 
<a href="?page=<?php echo $next; ?>" >Next</a>
<table border="1">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Address</td>
        <td>Image</td>
    </tr>
    <?php
    if ($stmt->execute()) {
        $stmt->store_result();
        $stmt->bind_result($id, $name, $addr,$picurl);

        while($stmt->fetch()) {
        echo '<tr>';
        echo "<td>{$id}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$addr}</td>";
        echo "<td><img src='{$picurl}'></td>";
        echo '</td>';
        }
    }
    ?>
</table>
<!-- bind的功能是綁定資料 -->
<!-- fetch的功能是抓取資料 -->