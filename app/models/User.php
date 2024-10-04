<?php 
  require_once 'grocerly_db.php';

  class User {
    private $db;

    public function __construct() {
      global $db;
      $this->db = $db;
    }

    public function register($email, $password, $name) {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $statement = $this->db->prepare("INSERT INTO Users (email, password, name) VALUES (:email, :password, :name)");
      return $statement->execute([
        'email' => $email,
        'password' => $hashedPassword,
        'name' => $name
      ]);
    }

    public function login($email, $password) {
      $statement = $this->db->prepare("SELECT * FROM Users WHERE email = :email");
      $statement->execute(['email' => $email]);
      $user = $statement->fetch(PDO::FETCH_ASSOC);

      if ($user && password_verify($password, $user['password'])) {
        return $user; // successfully logged in
      } else {
        return false; // invalid credentials
      }
    } 

    public function getUserByEmail($email) {
      $statement = $this->db->prepare("SELECT * FROM Users WHERE email = :email");
      $statement->execute(['email' => $email]);
      return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById($userId) {
      $statement = $this->db->prepare("SELECT * FROM Users WHERE user_id = :user_id");
      $statement->execute(['user_id' => $userId]);
      return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfile($userId, $email, $name) {
      $statement = $this->db->prepare("UPDATE Users SET email = :email, name = :name WHERE user_id = :user_id");
      return $statement->execute([
        'email' => $email,
        'name' => $name,
        'user_id' => $userId
      ]);
    }

    public function changePassword($userId, $currentPassword, $newPassword) {
      $statement = $this->db->prepare("SELECT password FROM Users WHERE user_id = :user_id");
      $statement->execute(['user_id' => $userId]);
      $user = $statement->fetch(PDO::FETCH_ASSOC);

      if ($user && password_verify($currentPassword, $user['password'])) {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateStatement = $this->db->prepare("UPDATE Users SET password = :password WHERE user_id = :user_id");
        return $updateStatement->execute(['password' => $hashedPassword, 'user_id' => $userId]);
      } else {
        return false; // current password is incorrect
      }
    }

    public function deleteUser($userId) {
      $statement = $this->db->prepare("DELETE FROM Users
                                      WHERE user_id = :user_id");
      $statement->execute(['user_id' => $userId]);
    }
  }
?>