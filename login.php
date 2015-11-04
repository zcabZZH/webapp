<?php
/**
 * Created by PhpStorm.
 * User: Zhenxin Zhang
 * Date: 2015/11/4
 * Time: 13:08
 */

require('config.php');
if(isset($_POST['submit'])) {
    $uname = mysql_escape_string($_POST['uname']);
    $pass = mysql_escape_string($_POST['pass']);
    $pass = md5($pass);

    $sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
    if(mysql_num_rows($sql)>0){
        echo "you are now logged in.";
        exit();
    }else{
        echo "Wrong U/P combination.";
    }

}else{

    $form=<<<EOT
<form action="login.php" method="POST">
Username: <input type="text" name="uname" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" name="submit" value="Log in" />
</form>
EOT;
    echo $form;
}


?>


