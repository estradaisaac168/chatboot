<?php

namespace Controllers;

use Core\Controllers;

class AuthController extends Controllers
{

  protected $views;

  public function __construct()
  {
    parent::__construct();
  }


  public function register()
  {
    $data['page_id'] = 1;
    $data['page_tag'] = "Register";
    $data['page_title'] = "Página de registro";
    $data['page_name'] = "register";
    $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
    $this->views->getView($this, "register", $data);
  }


  public function login()
  {
    $data['page_id'] = 1;
    $data['page_tag'] = "Login";
    $data['page_title'] = "Login";
    $data['page_name'] = "login";
    $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
    $this->views->getView($this, "login", $data);
  }
}
