<?php
    error_reporting(0);//錯誤報告關閉
    session_start();//session啟動
    if (!$_SESSION["id"]) {
        echo "please login first";
        //please login first" 並在 3 秒後重定向到登錄頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
         #mysqli_connect() 建立資料庫連結 
          // $conn=mysqli_connect(ip,帳號,密碼,資料庫);
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
         #mysqli_query() 從資料庫查詢資料
          #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            //!mysqli_query  如果執行失敗，會顯示錯誤信息 
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            
        }
    }
?>
