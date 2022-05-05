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

function pageHeader($pageTitle)
{
    require("./header.php");
}

function pageFooter()
{
    require("./footer.php");
}
