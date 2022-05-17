<?php

class Message extends BaseModel{

    public function insert(){
        $text = $_POST["text"];
        $sender = $_POST["sender"];
        $sql = "INSERT INTO `messages` (`text`, `sender`) VALUES ('$text', '$sender');";
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    } 

    public function getAll(){
        $sql = "SELECT * FROM `messages` order by `seen`,`id` ASC";
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    }
}
