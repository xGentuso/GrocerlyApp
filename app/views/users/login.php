<?php include '../app/views/includes/header.php' ?>

<h2>Login</h2>
<?php if (isset($error)): ?>
  <p><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<form action="/Grocerly/public/index.php?action=login" method="POST">
  <label for="email">Email:</label>
  <input type="email" name="email" required>

  <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

<?php include '../app/views/includes/footer.php'; ?>