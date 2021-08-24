<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/Components/autoload.php';

    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    } else {
        $route = '';
    }

    $routes = require_once $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';

    $isRoutesFound = false;
    foreach ($routes as $pattern => $controllerAndAction) {         
        if (preg_match($pattern, $route, $matches)) {
            $isRoutesFound = true;
            break;
        }
    }
        
    if (!$isRoutesFound) {
        echo 'Page not found!';
        return;
    }
    
    unset($matches[0]);
    
    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName();
    $controller->$actionName(...$matches);