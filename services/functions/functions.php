<?php
/**
 * echo hi to persons
 *
 * @param [string] $name
 * @return void
 */
function sayHello($name)
{
    echo "های " . $name;
}

function dd($var){
    var_dump($var);
    exit;
}

function redirect($url){
    header("Location: $url");
    exit();
}

