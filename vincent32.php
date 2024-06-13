<form method="post" action="vincent33.php" enctype="multipart/form-data">     
    Account: <input type="text" name="account" /><br />
    Password: <input type="password" name="passwd" /><br />
    Gender: <input type="radio" name="gender" value="m" checked/>male 
    <input type="radio" name="gender" value="f" />female<br />
    興趣: <input type="checkbox" name="h[]" value="1"/>打電腦
    <input type="checkbox" name="h[]" value="2"/>打籃球
    <input type="checkbox" name="h[]" value="3"/>打電玩<br />
    <input type="checkbox" name="h[]" value="4"/>打麻將
    <input type="checkbox" name="h[]" value="5"/>打棒球
    <input type="checkbox" name="h[]" value="6"/>打小孩<br />

    File1: <input type="file" name="upload[]" /><br />
    File2: <input type="file" name="upload[]" /><br />
    File3: <input type="file" name="upload[]" /><br />
    File4: <input type="file" name="upload[]" /><br />
    <input type="submit" value="test" />

</form>
<!-- method使用text有資安風險，因為url看的到使用者輸入的密碼，優點是可以根據url除錯或是得知是否有傳遞資料 -->
<!-- 改成post可避免此情形，改完記得vincent33機收資料的方式改成_POST或是_REQUEST -->
<!-- 檔案上傳必須使用_POST+enctype="multipart/form-data" -->
<!-- 複習透過同一個name可以達成單選的目的 -->
<!-- 使用checkbox輸出會有後蓋前的狀況，可以將name值後面加上[]解決(僅限php) -->