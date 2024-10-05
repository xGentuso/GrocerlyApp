<?php include '../app/views/includes/header.php'; ?>

<?php if (isset($_SESSION['user_id'])): ?>
  <h2>Profile</h2>
  <p>Welcome, <?echo htmlspecialchars($user['name']); ?>!</p>
  <p>Email: <?php echo htmlspecialchars(($user['email'])); ?></p>

  <a href="/Grocerly_app/public/index.php?action=logout">Logout</a>
<?php else: ?>
  <p>You need to <a href="/Grocerly_app/public/index.php?action=login">login</a> to view this page.</p>
<?php endif; ?>

<?php include '../app/views/includes/footer.php'; ?>