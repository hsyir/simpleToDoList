<?php

namespace Services\Controller;

use Services\Valid\Valid;
use Services\Layout\Layout;
use Services\Models\User;

class SignupController
{
    public function signup()
    {
        $error_log = "";
        if (isset($_POST['action']) and $_POST['action'] == "register") {

            $valid = new Valid();

            $error_log = $valid->check_signup($_POST['password'], $_POST['re-password'], $_POST['username']);

            if ($error_log == "") {

                $user = new User();

                $user->username = $_POST['username'];
                $user->password = $_POST['password'];
                $user->name = $_POST['name'];

                if ($Userdata = $user->create()) {
                    redirect("/login");
                }
            } else {
               
            }
            
        }
        Layout::rendergir('signup', ['error_log' => $error_log,"title"=>"عضویت کاربر"]);
    }
}
