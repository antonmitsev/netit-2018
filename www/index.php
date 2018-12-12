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
    global $controllers_directory, $models_directory, $views_directory;
    $file = $controllers_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    if (file_exists($file)) {
        require_once($file);
        return true;
    }
    $file = $models_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    if (file_exists($file)) {
        require_once($file);
        return true;
    }
    $file = $views_directory . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
    if (file_exists($file)) {
        require_once($file);
        return true;
    }
    echo $class . ' class not found!';
    exit(1);
}

SomeClass::test();

var_dump($base_folder, $uri, $www_directory, $base_directory, $controllers_directory);

echo 'It works!';