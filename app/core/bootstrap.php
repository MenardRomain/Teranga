<?php

use App\Core\Database;
use App\Core\Request;
use App\Core\Router;
use App\Core\App;
use App\Core\helpers;

App::bind('config', require dirname(__DIR__, 2) . '/config/config.php');
App::bind('database', Database::getInstance());
