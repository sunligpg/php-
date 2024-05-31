<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);//錯誤報告關閉
    session_start();//session啟動
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    //第7行到10是檢查用戶是否登錄
    //"<meta http-equiv=REFRESH content='3, url=2.login.html'>" 檢查用戶是否已登錄，如果未登錄，則顯示提示信息並在 3 秒後重定向到登錄頁面
    else{    
        echo "
            <form action=15.user_add.php method=post>
            
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
   
?>
    </body>
</html>
