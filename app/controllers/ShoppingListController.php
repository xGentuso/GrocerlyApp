<?php
require_once '../app/models/ShoppingList.php';

class ShoppingListController {
  public function index() {
    if (isset($_SESSION['user_id'])) {
      $shoppingList = new ShoppingList();
      $lists = $shoppingList->getListsByUserId($_SESSION['user_id']);
      include '../app/views/shopping_lists/index.php';
    } else {
      header('Location: /GrocerlyApp/public/index.php?action=login');
      exit();
    }
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
      $listName = $_POST['list_name'];
      $shoppingList = new ShoppingList();
      if ($shoppingList->createList($_SESSION['user_id'], $listName)) {
        header('Location: /GrocerlyApp/public/index.php?action=home');
        exit();
      } else {
        $error = "Failed to create shopping list. Please try again.";
        include '../app/views/shopping_lists/create.php';
      }
    } else {
      include ' ../app/views/shopping_lists/create.php';
    }
  }

  public function delete() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['list_id']) &&
    isset($_SESSION['user_id'])) {
        $listId = $_POST['list_id'];
        $shoppingList = new ShoppingList();
        if ($shoppingList->deleteList($listId)) {
          header('Location: /GrocerlyApp/public/index.php?action=home');
          exit();
        } else {
          $error = "Failed to delete shopping list. Please try again.";
          include '../app/views/shopping_list/index.php';
        }
    } else {
        header('../GrocerlyApp/public/index.php?action=home');
        exit();
    }
  } 
}

?>