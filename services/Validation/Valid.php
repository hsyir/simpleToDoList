<?php

class Valid {

    public function pass_validation($pass1,$pass2){
        if ($pass1!=$pass2){
            return null;
        }
        return true;
    }

    public function user_validation($username)
    {
        loadModel("User");
        $user= new User;
        
        $InUser = $user->getUserByusername($username);
        return $InUser;
    }
}