<?php

use Services\Auth\Auth;
use Services\Layout\Layout;
use Services\Models\User;

require("../loader.php");


$user = new User;

if (isset($_POST["action"]) and $_POST["action"]=="login") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userData = $user->check($username, $password);
    if($userData){
        $token = Auth::login($userData["id"]);
        redirect("/index.php");
    }
    else{
        echo "No .. ";
    }
}
Layout::pageHeader("ورود");
?>

<form action="/login.php" method="post">
    <input type="hidden" name="action" value="login">
    
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    <button>ورود</button>
</form>