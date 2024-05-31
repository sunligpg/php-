<?php

error_reporting(0);//錯誤報告關閉
session_start();//session啟動
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    //"<meta http-equiv=REFRESH content='3, url=2.login.html'>" 檢查用戶是否已登錄，如果未登錄，則顯示提示信息並在 3 秒後重定向到登錄頁面
}
else{    

   #mysqli_connect() 建立資料庫連結
   //$conn=mysqli_connect(ip,帳號,密碼,資料庫);
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     //!mysqli_query  如果執行失敗，會顯示錯誤信息 
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
       //"<meta http-equiv=REFRESH content='3, url=18.user.php'>" 檢查用戶是否已登錄，如果未登錄，則顯示提示信息並在 3 秒後重定向到登錄頁面
   }
}
?>
