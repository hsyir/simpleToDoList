<?php

class User extends BaseModel
{
    public $username = "";
    public $name = "";
    public $password = "";
    public $remember_token = "";

    public function create()
    {
        // TODO: Validation
        $sql =
            "INSERT INTO `users` (`name`, `username`, `password`) "
            ."VALUES ('$this->name','$this->username','$this->password');";
            
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    }

    public function check($username, $password)
    {
        $sql =
            "SELECT * FROM `users` where `username`='$username' and `password`='$password' limit 0,1;";
        $result = mysqli_query($this->dbCon, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function updateToken($userId, $token)
    {
        $sql = "UPDATE `users` set `remember_token` = '$token' where `id` = $userId";
        $result = mysqli_query($this->dbCon, $sql);
    }

    public function getUserByToken($token)
    {
        $sql =
            "SELECT * FROM `users` where `remember_token`='$token' limit 0,1;";
        $result = mysqli_query($this->dbCon, $sql);
        return mysqli_fetch_assoc($result);
    }
}
