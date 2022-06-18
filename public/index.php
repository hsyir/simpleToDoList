<?php

require("../vendor/autoload.php");

// Create Router instance
$router = new \Bramus\Router\Router();

require "../routes/web.php";

// Run it!
$router->run();
