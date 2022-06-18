<?php

namespace Services\Validation;

use Services\Models\User;

class Valid {

    public function pass_validation($pass1,$pass2){
        if ($pass1!=$pass2){
            return null;
        }
        return true;
    }

    public function user_validation($username)
    {
        $user= new User;
            return false;
        $InUser = $user->getUserByusername($username);
        return $InUser;
    }
}