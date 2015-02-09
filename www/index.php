<?php
// Load Global Defines
require_once dirname(__FILE__) . '/../config/defines.php';

// Init Parameter Manager
require_once LEIZEL_BASE_DIR . 'app/model/ParamManager.php';
$param_manager = new ParamManager();

// Load Controller Parent Class
require_once LEIZEL_BASE_DIR . 'app/controller/Controller.php';

// Check URL path
$url_path = $param_manager->getParam('url_path', '');

// Determine course of action based on URL path
$action = null;
switch($url_path) {

case '':
    require_once LEIZEL_BASE_DIR . 'app/controller/page/Astral.php';
    $action = new Page_Astral();
    break;

default:
    // Invalid path, show 404 page
    echo('404');
    exit;
    break;
}

// Execute action
$action->init($url_path);
$error_messages = $action->checkParams($param_manager);
if(empty($error_messages)) {
    $action->perform();
} else {
    echo('Error');
}
