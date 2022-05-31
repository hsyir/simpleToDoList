<?php
require(__DIR__."/functions.php");


spl_autoload_register(function($ClassName){

    $FileName = __DIR__ . DIRECTORY_SEPARATOR .$ClassName .".php";
    $FileName = str_replace("\\",DIRECTORY_SEPARATOR,$FileName);

    if(file_exists($FileName)){
        require($FileName);
    }
    else{
        die($FileName."یافت نشد");
    }
});