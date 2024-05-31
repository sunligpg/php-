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
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");//GET傳過來，變數名稱為bid的參數
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
            //佈告類型 (type) 設置對應單選按鈕的 checked
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
        //<input type=text name=title> 標題輸入框
        //32行33行34行 佈告類型選擇（單選按鈕）
        //<input type=date name=time> 發布時間選擇
        // <input type=submit value=新增佈告> <input type=reset value=清除> 提交和重置按鈕
    }
?>
