<?php

spl_autoload_register(function ($className) {
    $path = $_SERVER['DOCUMENT_ROOT'].'/'.str_replace('\\', '/', $className).'.php';    
    require_once $path;
});