<?php

function dd($var){
    var_dump($var);
    exit;
}

function redirect($url){
    header("Location: $url");
    exit();
}

