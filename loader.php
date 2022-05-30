<?php

require(__DIR__ ."/functions.php");

    spl_autoload_register(function ($className) {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . $className . ".php";
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $filename);
        
        if (file_exists($filename)) {
            require $filename;
        } else {
            die($filename . " not exists!!");
        }
    });
