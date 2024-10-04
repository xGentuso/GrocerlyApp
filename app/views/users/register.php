<?php include '../includes/header.php'; ?>

<h2>Register</h2>
<?php if (isset($error)): ?>
  <p><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <form action="/public/index.php?action=register" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Register</button>
  </form>

  <?php include '../includes/footer.php'; ?>