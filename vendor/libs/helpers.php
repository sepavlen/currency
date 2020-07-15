<?php

function view($view, $data = []){
    extract($data);

    $filename = dirname(__DIR__, 2) . '/app/views/' . $view . '.php';

    if (file_exists($filename)){
        require $filename;
    }
}
