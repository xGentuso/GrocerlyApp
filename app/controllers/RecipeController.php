<?php

use LDAP\Result;

require_once '../models/Recipe.php';

class RecipeController {
  public function index() {
    if (isset($_SESSION['user_id'])) {
      $recipe = new Recipe();
      $recipes = $recipe->getAllRecipes();
      include '../app/views/recipes/index.php';
    } else {
      header('Location: /Grocerly_app/public/index.php?action=login');
      exit();
    }
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset([$_SESSION['user_id']])) {
      $recipeName = $_POST['recipe_name'];
      $instructions = $_POST['instructions'];
      $recipe = new Recipe();
      if ($recipe->createRecipe($_SESSION['user_id'], $recipeName, $instructions)) {
        header('Location: /Grocerly_app/public/index.php?action=home');
        exit();
      } else {
        $error = "Failed to create recipe. Please try again.";
        include '../app/views/recipes/create.php';
      }
    } else {
      include '../app/view/recipes/create.php';
    }
  }

  public function view() {
    if (isset($_GET['recipe_id']) && isset($_SESSION['user_id'])) {
      $recipeId = $_GET['recipe_id'];
      $recipe = new Recipe();
      $recipeDetails = $recipe->getRecipeById($recipeId);
      if ($recipeDetails) {
        include '../app/views/recipes/view.php';
      } else {
        $error = "Recipe not found.";
        include '../app/views/recipes/index.php';
      }
    } else {
      header('Location: /Grocerly_app/public/index.php?action=login');
      exit();
    }
  }

  public function delete() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recipe_id']) &&
    isset($_SESSION['recipe_id'])) {
      $recipeId = $_POST['recipe_id'];
      $recipe = new Recipe();
      if ($recipe->deleteRecipe($recipeId)) {
        header('Location: /Grocerly_app/public/index.php?action=home');
        exit();
      } else {
        $error = "Failed to delete the recipe. Please try again.";
        include '../app/views/recipes/index.php';
      }
    } else {
      header('Location: /Grocerly_app/public/index.php?action=home');
      exit();
    }
  }
}
?>