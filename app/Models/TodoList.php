<?php
namespace Services\Models;

use Services\Models\BaseModel;


class ToDoList extends BaseModel
{

  public function SelectFromDataBase()
  {
    
    $sql = "SELECT * FROM `list` order by `id`";
    $result = mysqli_query($this->dbcon, $sql);
    return $result;
  }
  public function insert()
  {
    $query = "insert into `list` (title,done)values('" . $_POST['task'] . "','0')";
    $result = mysqli_query($this->dbcon, $query);
    return $result;
  }

  public function done()
  {
    $done = isset($_POST['done']) ? 1 : 0;
    $query = "update `list` set done='" . $done . "' where id='" . $_POST['id'] . "'";
    $result = mysqli_query($this->dbcon, $query);
    return $result;
  }

  public function delete()
  {
    $query = "delete from `list` where `list`.id ='" . $_POST['id'] . "'";
    $result = mysqli_query($this->dbcon, $query);
    return $result;
  }
}
