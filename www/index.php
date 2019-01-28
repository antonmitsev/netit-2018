<?php
session_start();
error_reporting(E_ALL);

$base_folder = str_ireplace('index.php', '', $_SERVER['SCRIPT_NAME']);

$uri = trim(str_ireplace($base_folder, '', $_SERVER['REQUEST_URI']), '/');
// Dir = file structure directory
$www_directory = $_SERVER['DOCUMENT_ROOT'] . ltrim($base_folder, '/');
$base_directory = realpath($www_directory . '..');
$libs_directory = realpath($base_directory . '/libs');
$controllers_directory = realpath($base_directory . '/controllers');
$models_directory = realpath($base_directory . '/models');
$views_directory = realpath($base_directory . '/views');

if (Config::$debug_mode) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);    
}


# 'DOCUMENT_ROOT' => 'C:/xampp/htdocs/',
# 'SCRIPT_FILENAME' => 'C:/xampp/htdocs/netit-2018/index.php',



// directory/classname.php
function __autoload($class) {
    // AdminController > admincontroller.php
    global $libs_directory, $controllers_directory, $models_directory, $views_directory;

    $file = $libs_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    if (file_exists($file)) {
        require_once($file);
        return true;
    }

    $file = $controllers_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    $file = str_ireplace('controller.php', '.controller.php', $file);
    if (file_exists($file)) {
        require_once($file);
        return true;
    }

    $file = $models_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    $file = str_ireplace('model.php', '.model.php', $file);
    if (file_exists($file)) {
        require_once($file);
        return true;
    }
/*    $file = $views_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    $file = str_ireplace('view.php', '.view.php', $file);
    if (file_exists($file)) {
        require_once($file);
        return true;
    } // */
    echo $class . ' class not found!';
    exit(1);
}

// Routing
$uri_arr = explode('?', $uri);
$uri_arr = explode('/', $uri_arr[0]);
define('CONTROLLER', strtolower($uri_arr[0]));
define('ACTION', ! isset($uri_arr[1]) ? 'default' : strtolower($uri_arr[1]));
define('LAYOUT', CONTROLLER);
define('VIEW', ACTION);
define('URI', $uri_arr[0]);
define('BASE', $base_folder);

define('HTTP_HOST', 'http' . 
    (
        @$_SERVER['HTTPS'] ? 's' : ''
    ) . '://' . $_SERVER['HTTP_HOST']
    );

// Main Router
switch (CONTROLLER) {
    case 'captcha':
        $_SESSION['captcha'] = 1111;
        echo $_SESSION['captcha'];
        exit(0);
    case 'ajax':
    case 'admin':
        $class = CONTROLLER . 'Controller';
        break;
    default:
        $class = 'DefaultController';
}

$method = 'action_' . ACTION;
if (! method_exists($class, $method)) {
    $method = 'action_default';
}

$application = new $class();
$template = new Template(
    array(
        'content' => $application->$method(),
        'menus_1' => @$application->menus[1],
        'page_content_db' => @$application->page_content_db,   
        'services_0' => @$application->services[0],
    )
);
