<?php include '../app/views/includes/header.php'; ?>

<!-- Hero Section -->
<section class="heroSection">
  <div class="heroContent">
    <h1>Welcome to Grocerly!</h1>
    <p>Your all-in-one grocery management app. Simplify your shopping, budgeting, and recipe planning effortlessly.</p>
    <div class="ctaButtons">
      <a href="/Grocerly_app/public/index.php?action=register" class="btnPrimary">Get Started</a>
      <a href="/Grocerly_app/public/index.php?action=login" class="btnSecondary">Login</a>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="featuresSection">
  <h2>Why Choose Grocerly?</h2>
  <div class="featuresContainer">
    <div class="featureItem">
      <img src="/Grocerly_app/public/assets/images/shoppingLists.png" alt="Shopping Lists Icon" class="featureIcon" loading="lazy">
      <h3>Create Shopping Lists</h3>
      <p>Organize your grocery items with customizable shopping lists. Add, remove, and prioritize items with ease.</p>
    </div>
    <div class="featureItem">
      <img src="/Grocerly_app/public/assets/images/budgetTracking.png" alt="Budget Tracking Icon" class="featureIcon" loading="lazy">
      <h3>Track Your Budgets</h3>
      <p>Monitor your spending and stay within your budget limits. Grocerly helps you manage your finances effectively.</p>
    </div>
    <div class="featureItem">
      <img src="/Grocerly_app/public/assets/images/recipeManagement.png" alt="Recipe Management Icon" class="featureIcon" loading="lazy">
      <h3>Manage Recipes</h3>
      <p>Store and organize your favorite recipes. Plan meals and generate shopping lists based on your culinary preferences.</p>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="testimonialsSection">
  <h2>What Our Users Say</h2>
  <div class="testimonialsContainer">
    <div class="testimonialItem">
      <p>"Grocerly has transformed the way I shop for groceries. It's so easy to create and manage my shopping lists!"</p>
      <h4>- Jane Doe</h4>
    </div>
    <div class="testimonialItem">
      <p>"Tracking my budget has never been simpler. Thanks to Grocerly, I save money every month."</p>
      <h4>- John Smith</h4>
    </div>
    <div class="testimonialItem">
      <p>"Managing recipes and planning meals is a breeze with Grocerly. Highly recommended!"</p>
      <h4>- Emily Johnson</h4>
    </div>
  </div>
</section>

<!-- Call-to-Action Section -->
<section class="ctaSection">
  <h2>Ready to Get Started?</h2>
  <p>Join thousands of satisfied users who have streamlined their grocery management with Grocerly.</p>
  <div class="ctaButtons">
    <a href="/Grocerly_app/public/index.php?action=register" class="btnPrimary">Register Now</a>
    <a href="/Grocerly_app/public/index.php?action=login" class="btnSecondary">Login</a>
  </div>
</section>

<!-- Newsletter Signup Section (Optional) -->
<section class="newsletterSection">
  <h2>Stay Updated with Grocerly</h2>
  <p>Subscribe to our newsletter for the latest updates, tips, and special offers.</p>
  <form class="newsletterForm">
    <input type="email" name="newsletterEmail" placeholder="Enter your email" required>
    <button type="submit" class="btnPrimary">Subscribe</button>
  </form>
</section>

<?php include '../app/views/includes/footer.php'; ?>
