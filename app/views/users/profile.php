<?php include '../app/views/includes/header.php'; ?>

<div class="profileContainer">
  <?php if  (isset($_SESSION['user_id'])): ?>
    <h2 class="textCenter">Profile</h2>
    <form id="profileForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo isset($user_info['name']) ? htmlspecialchars($user_info['name']) : ''; ?>" disabled>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo isset($user_info['email']) ? htmlspecialchars($user_info['email']) : ''; ?>" disabled>

      <div class="buttonGroup">
        <button type="button" class="btn btnSecondary editButton" id="editProfile">Edit</button>
        <button type="button" class="btn btnPrimary saveButton hidden" id="saveProfile">Save</button>
        <button type="button" class="btn btnDanger cancelButton hidden" id="cancelProfile">Cancel</button>
      </div>
    </form>
    <a href="/Grocerly_app/public/index.php?action=logout" class="logoutLink">Logout</a>
  <?php else: ?>
    <p>You need to <a href="/GrocerlyApp/public/index.php?action=login">Login</a></p>
  <?php endif; ?>
</div>

<?php include '../app/views/includes/footer.php'; ?>
