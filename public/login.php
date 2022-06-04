<?php

require("../loader.php");

use Services\Layout\Layout;
use Services\Auth\Auth;
use Services\Models\User;

$user = new User();
$errorLog = "";

if (isset($_POST['action']) and $_POST['action'] == "login") {
    $userdata = $user->login($_POST['username'], $_POST['password']);
    if ($userdata) {
        Auth::login($userdata['id']);
        redirect("./index.php");
    } else {
        $errorLog = "کاربری با این مشخصات یافت نشد!";
    }
}

Layout::render("login", ["errorLog"=>$errorLog]);
