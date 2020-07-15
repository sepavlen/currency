<?php

use app\controllers\IndexController;


require dirname(__DIR__) . "/config/config.php";
require VENDOR . "autoload.php";
require VENDOR . "libs/helpers.php";

new IndexController();

