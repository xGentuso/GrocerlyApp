<?php 

class Model {
  protected $db;

  public function __construct() {
    global $db;
    $this->db = $db;
  }

  // helper method to execute queries with parameters
  protected function executeQuery($query, $params = []) {
    $statement = $this->db->prepare($query);
    $statement->execute($params);
    return $statement;
  }
}
?>