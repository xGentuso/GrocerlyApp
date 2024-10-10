<?php
require_once '../app/models/User.php';


class UserController {
  public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
      $password = $_POST['password'];

      $user = new User();
      $userInfo = $user->getUserByEmail($email);

      if ($userInfo && password_verify($password, $userInfo['password'])) {
        $_SESSION['user_id'] = $userInfo['user_id'];
        header('Location: /Grocerly_app/public/index.php?action=profile');
        exit();
      } else {
        $error = "Invalid email or password.";
        include '../app/views/users/login.php';
      }
    } else {
      include '../app/views/users/login.php';
    }
  }

  public function register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
      $password = $_POST['password'];
  
      $user = new User();
      try {
        // Call the updated register method from the model
        if ($user->register($email, $password, $name)) {
          header('Location: /Grocerly_app/public/index.php?action=login');
          exit();
        }
      } catch (Exception $e) {
        // Handle the error when email already exists
        $error = $e->getMessage();
        include '../app/views/users/register.php';
      }
    } else {
      include '../app/views/users/register.php';
    }
  }

  public function profile() {
    if (isset($_SESSION['user_id'])) {
      $user = new User();
      $userInfo = $user->getUserById($_SESSION['user_id']);
      if ($userInfo) {
        // Assign $userInfo to $user for consistency in the view
        $user = $userInfo;
        include '../app/views/users/profile.php';
      } else {
        $error = "User not found.";
        include '../app/views/users/login.php';
      }
    } else {
      header('Location: /Grocerly_app/public/index.php?action=login');
      exit();
    }
  }
}
?>
