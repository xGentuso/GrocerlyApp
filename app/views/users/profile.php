<?php include '../app/views/includes/header.php'; ?>

<div class="profileContainer">
  <?php if (isset($_SESSION['user_id'])): ?>
    <h2>Profile</h2>
    <form id="profileForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo isset($user['name']) ? htmlspecialchars($user['name']) : ''; ?>" disabled>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" disabled>

      <button type="button" id="editProfile">Edit</button>
      <button type="button" id="saveProfile">Save</button>
    </form>
    <a href="/Grocerly_app/public/index.php?action=logout">Logout</a>
  <?php else: ?>
    <p>You need to <a href="/Grocerly_app/public/index.php?action=login">Login</a></p>
  <?php endif; ?>
</div>

<?php include '../app/views/includes/footer.php'; ?>
