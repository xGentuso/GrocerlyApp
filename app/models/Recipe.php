<?php 
require_once '../core/grocerly_db.php';

class Recipe {
  private $db;

  public function __construct() {
    global $db;
    $this->db = $db;
  }

  public function getAllRecipes() {
    $statement = $this->db->prepare("SELECT * FROM Recipes");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getRecipeById($recipeId) {
    $statement = $this->db->prepare("SELECT * FROM Recipes WHERE recipe_id = :recipe_id");
    $statement->execute(['recipe_id' => $recipeId]);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public function createRecipe($userId, $recipeName, $instructions) {
    $statement = $this->db->prepare("INSERT INTO Recipes (user_id, recipe_name, instructions, created_by)
     VALUES (:user_id, :recipe_name, :instructions, :created_by)");
    return $statement->execute([
      'recipe_name' => $recipeName,
      'instructions' => $instructions,
      'created_by' => $userId
    ]);
  }

  public function deleteRecipe($recipeId) {
    $statement = $this->db->prepare("DELETE FROM Recipes WHERE recipe_id = :recipe_id");
    return $statement->execute(['recipe_id' => $recipeId]);
  }
}

?> 