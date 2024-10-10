<?php include '../app/views/includes/header.php'; ?>

<h2>Login</h2>
<?php if (isset($error)): ?>
  <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<form action="/Grocerly_app/public/index.php?action=login" method="POST">
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required>

  <button type="submit">Login</button>
</form>

<?php include '../app/views/includes/footer.php'; ?>
