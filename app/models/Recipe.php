<?php 
require_once '../core/grocerly_db.php';

class Recipe {
  private $db;

  public function __construct() {
    global $db;
    $this->db = $db;
  }
}

?> 