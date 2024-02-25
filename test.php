<?php

include("vendor/autoload.php");

use Helpers\Auth;

// HTTP::redirect("/index.php", "http=test");
Auth::check();