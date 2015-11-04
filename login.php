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
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($email1 == $email2){
        if($pass1 == $pass2){
            //Verified.
        }else{
            echo "Sorry, your passwords do not match. <br />";
            exit();
        }
    }else{
        echo "Sorry, your emails do not match. <br />";
    }


}else{
    $form = <<<EOT
<form action="register.php" method="POST">
First Name:<input type="text" name="name" /><br />
Last Name:<input type="text" name="lname" /><br />
Username:<input type="text" name="uname" /><br />
Email:<input type="text" name="email1" /><br />
Confirm Email:<input type="text" name="email2" /><br />
Password:<input type="password" name="pass1" /><br />
Confirm Password:<input type="password" name="pass2" /><br />
<input type="submit" value="Register" name="submit" />

</form>

EOT;

    echo $form;

}

?>