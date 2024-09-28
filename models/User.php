<?php 
  require_once 'grocerly_db.php';

  class User {
    private $db;

    public function __constuct() {
      global $db;
      $this->db = $db;
    }

    public function register($email, $password, $name) {
      // registration logic
    }

    public function login($email, $password) {
      // login logic
    }

    public function getUserById($userId) {
      // user details by ID function
    }

    public function updateProfile($userId, $email, $name) {
      // update profile logic
    }

    public function changePassword($userId, $currentPassword, $newPassword) {
      // change password logic
    }

    public function deleteUser($userId) {
      $stmt = $this->db->prepare("DELETE FROM Users
                                  WHERE user_id = :user_id");
      $stmt->execute(['user_id' => $userID]);
    }
  }
?>