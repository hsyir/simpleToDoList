<?php

<<<<<<< Updated upstream:functions.php
=======

>>>>>>> Stashed changes:services/functions/functions.php
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

<<<<<<< Updated upstream:functions.php
function pageHeader($pageTitle)
{
    require("./header.php");
}

function pageFooter()
{
    require("./footer.php");
}
=======
function dd($var){
    var_dump($var);
    exit;
}

function redirect($url){
    header("Location: $url");
    exit();
}

>>>>>>> Stashed changes:services/functions/functions.php
