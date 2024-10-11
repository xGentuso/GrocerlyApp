<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/GrocerlyApp/public/assets/css/styles.css">
  <!-- Updated Font Awesome CDN with Correct Integrity Hash -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
  crossorigin="anonymous" 
  referrerpolicy="no-referrer" />
  <title>Grocerly App</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/GrocerlyApp/public/index.php?action=home">Home</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="/GrocerlyApp/public/index.php?action=profile">Profile</a></li>
          <li><a href="/GrocerlyApp/public/index.php?action=logout">Logout</a></li>
        <?php else: ?>
          <li><a href="/GrocerlyApp/public/index.php?action=register">Register</a></li>
          <li><a href="/GrocerlyApp/public/index.php?action=login">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main>
