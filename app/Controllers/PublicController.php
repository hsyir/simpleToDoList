<?php 

namespace Services\Controllers;

use Services\Models\ToDoList;
use Services\Layout\Layout;

class PublicController{

   public function about(){
       Layout::render("pages.about");
   }

}