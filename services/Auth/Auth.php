<?php

namespace Services\Auth;

use Services\Models\User;

class Auth
{
    public static function login($userId)
    {
        $token = random_int(10000000000, 99999999999999);
        $user = new User;
        $user->updateToken($userId, $token);
        setcookie("user_token", $token);
        return $token;
    }

    public static function user()
    {
        if (!isset($_COOKIE["user_token"])) {
            return null;
        }
        $user_token = $_COOKIE["user_token"];
        $user= new User;
        $logedInUser = $user->getUserByToken($user_token);
        return $logedInUser;
    }

    public static function logout()
    {
        setcookie("user_token", "");
    }
}
