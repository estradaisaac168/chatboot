<?php

namespace Controllers;

use Core\Controllers;

class ErrorController extends Controllers
{
	protected $views;



	public function __construct()
	{
		parent::__construct();
	}

	public function notFound()
	{

		$this->views->getView($this, "error");
	}
}

$notFound = new ErrorController();
$notFound->notFound();
