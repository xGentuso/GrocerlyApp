<?php include '../includes/header.php'; ?>

<h2>Your Recipes</h2>
<?php if (!empty($recipes)): ?>
  <ul>
    <?php foreach ($recipes as $recipe): ?>
      <li>
        <?php echo htmlspecialchars($recipes['recipes_name']); ?>
        <a href="/GrocerlyApp/public/index.php?action=view_recipe&recipes_id=<?php echo $recipe['recipe_id']; ?>">View</a>
        <a href="/GrocerlyApp/public/index.php?action=delete_recipe&recipe_id=<?php echo $recipe['recipe_id']; ?>">Delete</a>
      </li>
      <?php endforeach; ?>
  </ul>
  <?php else: ?>
    <p>No recipes found. <a href="/GrocerlyApp/public/index.php?action=create_recipe">Create one now!</a></p>
    <?php endif; ?>

    <?php include '../includes/footer.php';