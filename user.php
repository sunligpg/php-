<?php
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from user");
    echo"<table border=1><tr><td><br></td><td>id</td><td>pwd</td></tr> ";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>修改|<a href=user_delete.php?id=".$row['id']."</td><td>".$row['pwd']."</td><tr>";
    }
    echo "</table>"
}

?>