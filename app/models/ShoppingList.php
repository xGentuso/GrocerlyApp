<?php 
require_once '../core/grocerly_db.php';

class ShoppingList {
  private $db;

  public function __construct() {
    global $db;
    $this->db = $db;
  }

  public function getListsByUserId($userId) {
    $statement = $this->db->prepare("SELECT * FROM Shopping_Lists Where user_id = :user_id");
    $statement->execute(['user_id' => $userId]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createList($userId, $listName) {
    $statement = $this->db->prepare("INSERT INTO Shopping_Lists (user_id, list_name) VALUES (:user_id, :list_name)");
    return $statement->execute(['user_id' => $userId, 'list_name' => $listName]);
  }

  public function deleteList($listId) {
    $statement = $this->db->prepare("DELETE FROM Shopping_Lists WHERE list_id = :list_id");
    return $statement->execute(['list_id' => $listId]);
  }
}

?>