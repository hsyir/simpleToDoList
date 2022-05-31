<?php
require("../loader.php");
use Services\Auth\Auth;

Auth::logout();
redirect("./index.php");