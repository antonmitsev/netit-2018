<pre><?php
# 'DOCUMENT_ROOT' => 'C:/xampp/htdocs/',
# 'SCRIPT_FILENAME' => 'C:/xampp/htdocs/netit-2018/index.php',

$base_folder = str_ireplace('index.php', '', $_SERVER['SCRIPT_NAME']);

$uri = trim(str_ireplace($base_folder, '', $_SERVER['REQUEST_URI']), '/');
// Dir = file structure directory
$www_directory = $_SERVER['DOCUMENT_ROOT'] . ltrim($base_folder, '/');
$base_directory = realpath($www_directory . '..');
$controllers_directory = realpath($base_directory . '/controllers');
$models_directory = realpath($base_directory . '/models');
$views_directory = realpath($base_directory . '/views');

// directory/classname.php
function __autoload($class) {
    // AdminController > admincontroller.php
    global $controllers_directory, $models_directory, $views_directory;
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
    $file = $views_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    $file = str_ireplace('view.php', '.view.php', $file);
    if (file_exists($file)) {
        require_once($file);
        return true;
    }
    echo $class . ' class not found!';
    exit(1);
}

// Routing
$uri_arr = explode('/', $uri);
define('CONTROLLER', strtolower($uri_arr[0]));
define('ACTION', ! isset($uri_arr[1]) ? 'default' : strtolower($uri_arr[1]));

switch (CONTROLLER) {
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
var_dump($application->$method());


echo 'It works!';