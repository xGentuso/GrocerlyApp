<?php 

class Controller {
  protected $viewPath = '../app/views/';


  // load a specific view

  protected function loadview($view, $data = []) {
    extract($data);
    require_once $this->viewPath . $view . '.php';
  }

  // redirect to a specific route 
  protected function redirect($route) {
    header('Location: $route');
    exit();
  }
 }
?>