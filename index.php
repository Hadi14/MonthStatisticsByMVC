<?
require_once('system/loader.php');
$uri = getRequestUri();
$uri = str_replace(getBaseUrl(), '/', $uri);
$parts = explode('/', $uri);
$controller = $parts[1];
$method = $parts[2];

$params = array();
for ($i = 3; $i < count($parts); $i++) {
    $params[] = $parts[$i];
}
// echo $controller;
$controllerClassname = ucfirst($controller) . "Controller";
$controllerInstance = new  $controllerClassname();
$controllerInstance->$method($params);
