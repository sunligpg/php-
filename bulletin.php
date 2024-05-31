<?php
    error_reporting(0); #不顯示錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2>";
        echo "<tr><td><br></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo echo "<tr><td>修改  <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
            //方法二
            echo "<tr><td>修改  <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>"".$row["bid"]."</td><td>".$row["type"]."</td><td>".$row["title"]."</td><td>".$row["content"]."</td><td>".$row["time"]."</td></tr>";
    
            echo "</table>";
        

        }
           
        
    }
   
    
?>
