<?php

namespace Services\Controller;

use Services\Auth\Auth;
use Services\Layout\Layout;
use Services\Models\User;

class LoginController
{

    public function login()
    {
        $user = new User();
        $error_log = "";
        if (isset($_POST['action']) and $_POST['action'] == "login") {

            $userdata = $user->login($_POST['username'], $_POST['password']);
            if ($userdata) {
                Auth::login($userdata['id']);
                redirect("/");
            } else {
                $error_log = "کاربری با این مشخصات یافت نشد!";
            }
        }

        Layout::rendergir('login', ["error_log" => $error_log,"title"=>"ورود کاربر"]);
    }
}
