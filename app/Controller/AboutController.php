<?php
namespace Services\Controller;

use Services\Layout\Layout;

class AboutController{
public function about(){
    Layout::rendergir("about",["title"=>"درباره ما"]);
}

    
}
