<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Grocerly_app/public/assets/css/styles.css">
  <title>Grocerly App</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/Grocerly_app/public/index.php?action=home">Home</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="/Grocerly_app/public/index.php?action=profile">Profile</a></li>
          <li><a href="/Grocerly_app/public/index.php?action=logout">Logout</a></li>
        <?php else: ?>
          <li><a href="/Grocerly_app/public/index.php?action=register">Register</a></li>
          <li><a href="/Grocerly_app/public/index.php?action=login">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main>
