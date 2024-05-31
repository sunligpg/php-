<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #SQL命令
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo"新增資料錯誤";
     echo "<meta http-equiv=REFRESH content='3, url=18.login.html'>";
     
   }
   else{
     echo "新增成功";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>