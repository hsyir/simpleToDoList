<?php

$router->setNamespace('\Services\Controllers');

$router->get('/', "HomeController@index");
$router->get("/storeNewTodoItem", "HomeController@store");
$router->get("/about", "PublicController@about");
$router->get("/login", "AuthController@showLoginForm");
$router->post("/doLogin", "AuthController@doLogin");
$router->get("/logout", "AuthController@logout");
$router->get("/register", "AuthController@showRegisterForm");
$router->post("/doRegister", "AuthController@doRegister");
$router->post("/dosignup", "AuthController@dosignup");
$router->get("/contact", "ContactControllers@homecontact");