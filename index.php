<?php


require_once("config/config.php");
require_once("helpers/helpers.php");
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) {
	if ($arrUrl[1] != "") {
		$method = $arrUrl[1];
	}
}

if (!empty($arrUrl[2])) {
	if ($arrUrl[2] != "") {
		for ($i = 2; $i < count($arrUrl); $i++) {
			$params .=  $arrUrl[$i] . ',';
			# code...
		}
		$params = trim($params, ',');
	}
}


require __DIR__ . '/vendor/autoload.php';


$controller = ucwords($controller) . "Controller";

$controllerFile = __DIR__ . "\controllers/" . $controller . ".php";


if (file_exists($controllerFile)) {


	require_once($controllerFile);

	$controller = "Controllers\\" . $controller;

	$controller = new $controller();

	if (method_exists($controller, $method)) {
		$controller->{$method}($params);
	} else {
		require_once __DIR__ . "/Controllers/ErrorController.php";
	}
} else {
	require_once __DIR__ . "/Controllers/ErrorController.php";
}
