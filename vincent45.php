<meta charset="utf-8">
<?php
    // 先使用issset判斷是否收到資料，注意vincent44使用POST傳輸，故這邊使用$_POST接收
    // !isset=如果沒有收到，使用header轉向>轉回vincent44檔案
    if (!isset($_POST['account'])) header('Location: vincent44.html');

    $account = $_POST['account'];
    // 使用password_hash加密，參數1($_POST['passwd'])為原始密碼，參數2(PASSWORD_DEFAULT)為轉成雜湊值
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $realname = $_POST['realname'];

    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');

    // 檢查帳號是否重複
    $sql = 'SELECT account from member WHERE account = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 0) {
        $sql = 'INSERT INTO member (account,password,realname) VALUES(?,?,?)';
        // 避免隱碼攻擊，使用prepare回傳statment敘述句
        $stmt = $mysqli->prepare($sql);
        // 使用bind綁定參數
        $stmt->bind_param('sss', $account, $passwd, $realname);
        if ($stmt->execute()) {
            echo 'OK';
        }else {
            echo 'XX';
        }
    }else {
        echo 'Account already exist';
    }
?>