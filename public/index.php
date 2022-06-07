<?php

require("../vendor/autoload.php");

$route = $_SERVER['REQUEST_URI'];

$routes = require('../routers/route.php');

if(isset($routes[$route])){
    

    
   $array =  explode("@",$routes[$route]); 
   $classname = "\\Services\\Controller\\$array[0]";

   $action = $array[1];

   $controllername =new $classname();
   $controllername -> $action();
   exit;

}

http_response_code(404);
    require "404.php";


?>

