<?php
namespace Services\Auth;

use Services\Models\User;

class Auth {

    public static function login($id)
    {
        $token = random_int(1000000,9000000);
        $user = new User();
        $user -> update_token($id,$token);
        setcookie("login_user",$token);
    }
    public static function user()
    {
        if(!isset($_COOKIE['login_user'])){
            return null;
        }
        $user =new User;
        $UserByToken = $user -> GetuserbyToken($_COOKIE['login_user']);
        return $UserByToken;
    }
    public static function logout(){
        setcookie("login_user","");
    }
}