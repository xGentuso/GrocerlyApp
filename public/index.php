<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// include core files
require_once '../config/config.php';
require_once '../app/core/grocerly_db.php';

// include controllers
require_once '../app/controllers/UserController.php';
require_once '../app/controllers/ShoppingListController.php';
require_once '../app/controllers/RecipeController.php';

// determine which action the user is requesting
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// routing logic
switch ($action) {
  case 'login':
    $userController = new UserController();
    $userController->login();
    break;

  case 'register':
    $userController = new UserController();
    $userController->register();
    break;

  case 'create_shopping_list':
    $shoppingListController = new ShoppingListController();
    $shoppingListController->create();
    break;
  

  case 'profile':
    $userController = new UserController();
    $userController->profile();
    break;

  case 'home':
  default:
    include '../app/views/home.php';
    break;
}
?>
