<?php

namespace Services\Models;

use Services\Models\BaseModel;

class User extends BaseModel{

   public $name = "";
   public $username = "";
   public $password = "";
   public $remember_token = "";



    public function create(){

        $sql = "insert into users (name,username,password)
                     values('".$this ->name."','".htmlspecialchars( $this ->username)."','".$this ->password."')";
        $result = mysqli_query($this ->dbcon,$sql);
        return $result;
    }

    public function checkifExists ($username){
        $sql = "select * from users where username='".htmlspecialchars($username)."'";
        $result =mysqli_query($this ->dbcon,$sql);
        return mysqli_num_rows($result);
    }
    public function login($username,$password){
        $sql = "select * from users where username='".htmlspecialchars($username)."' and password ='".$password."' limit 0,1";
        $result =mysqli_query($this ->dbcon,$sql);
        return mysqli_fetch_assoc($result);
    }

     public function update_token($id,$token)
    {
        $sql = 
              "UPDATE `users` set remember_token='".$token."' where id ='".$id."' ";
        $result =mysqli_query($this ->dbcon,$sql);
        return $result;
    }
    public function GetuserbyToken($token)
    {
        $sql =
            "SELECT * FROM `users` where `remember_token`='$token' limit 0,1;";
        $result = mysqli_query($this->dbcon, $sql);
        return mysqli_fetch_assoc($result);
    }


}