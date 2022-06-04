<?php 

namespace Services\Controllers;

use Services\Models\ToDoList;
use Services\Layout\Layout;

class HomeController{

    public function index(){
        $todolist = new ToDoList;
        $todoList =$todolist->SelectFromDataBase();
        //if (mysqli_num_rows($result) > 0)
        Layout::render("index",["todoList"=>$todoList]);
    }

    public function store(){
        $todolist = new ToDoList;
        $actions = ['insert','delete','done'];
        if(isset($_POST['action']) and in_array($_POST['action'],$actions)){
            $action = $_POST['action'];
            $todolist -> $action();
            redirect('/');
        }
    }

}