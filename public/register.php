<?php

use Services\Layout\Layout;
use Services\Models\User;
use Services\Validation\Valid;

require("../loader.php");

$user = new User;
$valid = new Valid;
if (isset($_POST["action"]) and $_POST["action"]=="register") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat=$_POST["password_repeat"];
    $passvalid= $valid->pass_validation($password,$password_repeat);
    if ($passvalid){
        $uservalid=$valid->user_validation($username);
        if(!$uservalid){
            $userData = $user->create($name,$username, $password);
            if($userData){
                redirect("/login.php");
            }
            else{
                echo "No .. ";
            }
        }
        else{
            echo "نام کاربری قبلا استفاده شده...!";
        }
    }
    else{
        echo "رمز عبور و تکرارش  برابر نیسست...!";
    }
}
Layout::pageHeader("ایجاد حساب");
?>

<form action="/register.php" method="post">
    <input type="hidden" name="action" value="register">
    
    نام: <input type="text" name="name" >
    <br>
    <br>
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    تگرار رمز عبور: <input type="password" name="password_repeat">
    <br>
    <br>
    <button>ایجاد حساب</button>
</form>