<?php
/**
 * Created by PhpStorm.
 * User: Zhenxin Zhang
 * Date: 2015/11/4
 * Time: 13:07
 */

require('config.php');

if(isset($_POST['submit'])){
//Perform the verification
    $uname = $_POST['uname'];

    $pass = $_POST['pass'];

    if(0){
        if(0){
            //Verified.


            $uname=mysql_escape_string($_POST['uname']);
            $pass=mysql_escape_string($pass);
            $pass=md5($pass);

            $sql=mysql_query("SELECT * FROM `users` WHERE `uname`='$uname'");
            if(mysql_num_rows($sql)>0){
                echo "Sorry, that user already exists.";
                exit();
            }
            mysql_query("INSERT INTO `users` (`id`,`uname`,`pass`) VALUES (NULL,'$uname','$pass')");


        }else{
            echo "Sorry, your passwords do not match. <br />";
            exit();
            //Just in case you need to double check user input
        }
    }else{
        echo "Sorry, your emails do not match. <br />";
        exit();
        //Just in case you need to double check user input
    }


}else{
    $form = <<<EOT
<form action="register.php" method="POST">
Username:<input type="text" name="uname" /><br />
Password:<input type="password" name="pass1" /><br />
<input type="submit" value="Register" name="submit" />

</form>

EOT;

    echo $form;

}

?>
