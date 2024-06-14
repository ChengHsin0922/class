<style>
    form {
        display: grid;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    h3 {
        display: grid;
        justify-content: center;
    }
</style>
<?php
    include('vincentapis.php');
    
    session_start();

        if (isset($_GET['account'])) {
            $account = $_GET['account']; $passwd = $_GET['passwd'];

            $mysqli = new mysqli('localhost', 'root', '', 'iii');
            $mysqli->set_charset('utf8');

            $sql = 'SELECT id,account,password,realname,icon FROM member WHERE account = ?';
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('s', $account);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id,$account,$hashPasswd,$realname,$icon);
                $stmt->fetch();
                if (password_verify($passwd, $hashPasswd)) {
                    $member = new Member();
                    $member->setId($id);
                    $member->setAccount($account);
                    $member->setRealname($realname);
                    $member->setIcon($icon);
                    $_SESSION['member'] = $member;
                    $_SESSION['now'] = time();
                    header('Location: main.php');
                }
            }else {
                echo 'debug1';
            }

        }
    // $member = new Member();
    // $member->setId(1);
    // $member->setAccount('vincent');

    // $_SESSION['member'] = $member;

    // $member->setAccount('newvincent');
    // $rand = rand(1,49);
    // echo $rand;    
    // $_SESSION['rand'] = $rand;
    // $rand = 100;  //這邊存放的是值
    // $ary = [1,2,3,4];
    // var_dump($ary);
    // $_SESSION['ary'] = $ary;
    //$ary[2] = 333;   //不會被帶到main頁面
?>
<h3>會員登入</h3><hr />
<!-- <a href="main.php">Main</a> -->
<form action="">
    Account: <input name="account"/><hr />
    Password: <input type="password" name="passwd" /> <hr />
    <input type="submit" value="Login" /> <br />
</form>
