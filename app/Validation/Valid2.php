<?php
namespace Services\Validation;
use Services\Models\User;

class Valid2 {

    private $pass1,$pass2,$username;
    private $error;
    
    public function check_signup($pass1,$pass2,$username)
    {
        $this->pass1 = $pass1;
        $this->pass2 = $pass2;
        $this->username = $username;
        $this->repassword();
        $this->checkuser();
        return $this->error;
        
    }

    public function empetycheck()
    {
        if($this->pass1 !=$this->pass2){
            $this->error = "رمزهایی عبور یکسان نیستن!";
        }    
    }

    public function repassword()
    {
        if($this->pass1 !=$this->pass2){
            $this->error = " پسورد ها یکسان نیستن!";
        }    
    }

    public function checkuser()
    {
        if($this->username!=""){
        $user_in_use = new User();
        $res = $user_in_use->checkifExists($this->username);
        if($res>0){
            $this->error = "نام کاربری از قبل موجود است.";
        }
     }
     
    }
}