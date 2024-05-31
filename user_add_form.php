<?php
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{
    echo "<form action=user_add.php method=post></form>
    帳號:<input type =text name=id><br>
    密碼:<input type =text name=pwd><p></p>
    <input type=subimt value=新增用者><input type=reset value=清除>
    </from>"    
}

?>