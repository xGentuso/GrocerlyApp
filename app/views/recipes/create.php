<?php include '../includes/header.php'; ?>

<h2>Create a New Recipe</h2>
<?php if (isset($error)): ?>
  <p><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<form action="/GrocerlyApp/public/index.php?action=create_recipe" method="POST">
  <label for="recipe_name">Recipe Name:</label>
  <input type="text" name="recipe_name" required>

  <label for="instructions">Instructions:</label>
  <textarea name="instructions" rows="5" required></textarea>

  <button type="submit">Create Recipe</button>
</form>


<?php include '../includes/footer.php'; ?>

