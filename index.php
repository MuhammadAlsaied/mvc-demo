<?php

// The entery point of our app


use core\Router;
use core\Request;

require './core/bootstrap.php';

Router::Load(Request::uri(), Request::method());
