<?php 

session_start();

// include core files
require_once '../config/config.php';
require_once '../app/core/db.php';

// determine which action the user is requesting
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// routing logic
switch ($action) {
  case 'login':
    require_once '../app/controllers/UserController.php';
    $userController = new UserController();
    $userController->login();
    break;

  case 'register':
    require_once '../app/controllers/UserController.php';
    $userController = new UserController();
    $userController->register();
    break;

  case 'create_shopping_list':
    require_once '../app/controllers/ShoppingListController.php';
    $shoppingListController = new ShoppingListController();
    $shoppingListController->create();

  case 'home':
    default:
    include '../app/views/home.php';
    break;
}


?>