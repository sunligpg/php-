<?php
    session_start();//錯誤報告關閉
    unset($_SESSION["id"]);//session啟動
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; 
     //"<meta http-equiv=REFRESH content='3, url=2.login.html'>" 檢查用戶是否已登錄，如果未登錄，則顯示提示信息並在 3 秒後重定向到登錄頁面

?>
