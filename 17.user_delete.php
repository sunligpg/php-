<?php
    error_reporting(0);//錯誤報告關閉
    session_start();//session啟動
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
         #mysqli_connect() 建立資料庫連結
        // $conn=mysqli_connect(ip,帳號,密碼,資料庫);
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";//GET傳過來，變數名稱為id的參數
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            //!mysqli_query  如果執行失敗，會顯示錯誤信息 
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
           //"<meta http-equiv=REFRESH content='3, url=18.user.php'>" 檢查用戶是否已登錄，如果未登錄，則顯示提示信息並在 3 秒後重定向到登錄頁面
    }
?>
