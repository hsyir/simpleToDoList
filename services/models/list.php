<?php

class TodoList extends BaseModel
{
    public function done()
    {
        $done = isset($_POST["done"]) ? 1 : 0;
        $sql = " UPDATE `list` SET `done` = '$done' WHERE `list`.`id` = $_POST[id];";
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    }

    public function delete()
    {
        $sql = " DELETE FROM `list` WHERE `list`.`id` = $_POST[id]";
        $result = mysqli_query($this->dbCon, $sql);
        echo mysqli_affected_rows($this->dbCon);
        return $result;
    }

    public function insert()
    {
        $taskTitle = $_POST["task_title"];
        $sql = "INSERT INTO `list` (`title`, `done`) VALUES ('$taskTitle', '0');";
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `list` order by `done`,`id` ASC";
        $result = mysqli_query($this->dbCon, $sql);
        return $result;
    }
}
