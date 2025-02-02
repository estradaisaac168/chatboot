<?php

namespace Core;

class Views
{
	function getView($controller, $view, $data = "")
	{
		$controller = get_class($controller);

		$controller = strtolower(str_replace("Controllers\\", "", $controller));

		if ($controller == "home") {
			$view = dirname(__DIR__) .  "/views/" . $view . ".php";
		} else {
			$view = dirname(__DIR__) . "/views/" . $controller . "/" . $view . ".php";
		}


		require_once($view);
	}
}
