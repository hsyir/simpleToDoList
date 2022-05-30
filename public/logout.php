<?php

use Services\Auth\Auth;

require("../loader.php");
Auth::logout();
redirect("/index.php");