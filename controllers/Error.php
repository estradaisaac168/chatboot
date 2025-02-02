<?php

namespace Controllers;

use Core\Controllers;

class Errors extends Controllers
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

$notFound = new Errors();
$notFound->notFound();
