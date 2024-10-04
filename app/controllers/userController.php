<?php
require_once '../models/User.php';

class UserController {
  public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $user = new User();
      $userInfo = $user->getUserByEmail($email);

      if ($userInfo && password_verify($password, $userInfo['password'])) {
        $_SESSION['user_id'] = $userInfo['user_id'];
        header('Location: /index.php?action=profile');
        exit();
      } else {
        $error = "Invalid email or password.";
        include '../views/users/login.php';
      }
    } else {
      include '../views/users/login.php';
    }
  }

  public function register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $user = new User();
      if ($user->register($name, $email, $password)) {
        header('Location: /index.php?action=login');
        exit();
      } else {
        $error = "Registration failed. Please try again.";
        include '../views/users/register.php';
      }
    } else {
      include '../views/users/register.php';
    }
  }

  public function profile() {
    if (isset($_SESSION['user_id'])) {
      $user = new User();
      $userInfo = $user->getUserById($_SESSION['user_id']);
      if ($userInfo) {
        include '../views/users/profile.php';
      } else {
        $error = "User not found.";
        include '../views/users/login.php';
      }
    } else {
      header('Location: /index.php?action=login');
      exit();
    }
  }
}
?>