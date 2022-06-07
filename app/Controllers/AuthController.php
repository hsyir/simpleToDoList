<?php

namespace Services\Controllers;

use Services\Auth\Auth;
use Services\Layout\Layout;
use Services\Models\User;
use Services\Validation\Valid;

class AuthController
{
    public function showLoginForm()
    {
        $errorLog = "";
        Layout::render("auth.login", ["errorLog"=>$errorLog]);
    }

    public function doLogin()
    {
        $user = new User();

        if (isset($_POST['action']) and $_POST['action'] == "login") {
            $userdata = $user->login($_POST['username'], $_POST['password']);
            if ($userdata) {
                Auth::login($userdata['id']);
                redirect("/");
            } else {
                $errorLog = "کاربری با این مشخصات یافت نشد!";
            }

            Layout::render("auth.login", ["errorLog"=>$errorLog]);
        }
    }

    public function logout()
    {
        Auth::logout();
        redirect("/");
    }
    
    public function showRegisterForm()
    {
        Layout::render("auth.register");
    }

    public function doRegister()
    {
        $user = new User;
        $valid = new Valid;
        $errorMessage = "";
        if (isset($_POST["action"]) and $_POST["action"]=="register") {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password_repeat=$_POST["password_repeat"];
            $passvalid= $valid->pass_validation($password, $password_repeat);
            if ($passvalid) {
                $uservalid=$valid->user_validation($username);
                if (!$uservalid) {
                    $userData = $user->create($name, $username, $password);
                    if ($userData) {
                        redirect("/login");
                    } else {
                        $errorMessage = "No .. ";
                    }
                } else {
                    $errorMessage = "نام کاربری قبلا استفاده شده...!";
                }
            } else {
                $errorMessage = "رمز عبور و تکرارش  برابر نیسست...!";
            }
        }
        
        Layout::render("auth.register", ["errorMessage"=>$errorMessage]);
    }
}
