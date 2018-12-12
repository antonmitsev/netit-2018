<pre><?php
# 'DOCUMENT_ROOT' => 'C:/xampp/htdocs/',
# 'SCRIPT_FILENAME' => 'C:/xampp/htdocs/netit-2018/index.php',

$base_folder = str_ireplace('index.php', '', $_SERVER['SCRIPT_NAME']);

$uri = trim(str_ireplace($base_folder, '', $_SERVER['REQUEST_URI']), '/');
// Dir = file structure directory
$www_directory = $_SERVER['DOCUMENT_ROOT'] . ltrim($base_folder, '/');

var_dump($base_folder, $uri, $www_directory);

echo 'It works!';