<?php include '../app/views/includes/header.php'; ?>

<main>
  <div class="registerContainer">
    <h2 class="textCenter">Register</h2>

    <?php if (isset($error)): ?>
      <p class="errorMessage"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="/GrocerlyApp/public/index.php?action=register" method="POST">
      <div class="formGroup">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
      </div>

      <div class="formGroup">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
      </div>

      <div class="formGroup">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <div id="passwordStrength"></div>
      </div>

      <button type="submit" class="btn btnPrimary">Register</button>
    </form>
  </div>
</main>

<?php include '../app/views/includes/footer.php'; ?>
