<?php include '../app/views/includes/header.php'; ?>

<div class="loginContainer">
  <h2 class="textCenter">Login to Grocerly</h2>
  
  <?php if (isset($error_message)): ?>
    <div class="errorMessage">
      <?php echo htmlspecialchars($error_message); ?>
    </div>
  <?php endif; ?>
  
  <form class="loginForm" action="/GrocerlyApp/public/index.php?action=login" method="POST">
    <div class="formGroup">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    
    <div class="formGroup">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    
    <div class="buttonGroup">
      <button type="submit" class="btn btnPrimary">Login</button>
      <a href="/GrocerlyApp/public/index.php?action=register" class="btn btnSecondary">Register</a>
    </div>
  </form>
  
  <div class="forgotPassword">
    <a href="/GrocerlyApp/public/index.php?action=forgot_password">Forgot your password?</a>
  </div>
</div>

<?php include '../app/views/includes/footer.php'; ?>
