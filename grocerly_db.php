<?php 
require_once 'config.php';
require_once 'error_handler.php';

  try {
    // create a new PDO instance
    $db = new PDO($dsn, $username, $password);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
  } catch (PDOException $e) {
    // handles the error
    handleError($e->getMessage());
    exit();
  }
?>