# Grocerly

**Grocerly** is a smart grocery shopping assistant designed to streamline your shopping experience. It helps you manage dynamic shopping lists, compare prices across stores, receive personalized recipe suggestions, and much more—all in one convenient mobile web application.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Features

### 1. Dynamic Shopping Lists

- **Real-Time Syncing**: Create, edit, and manage shopping lists that sync across devices instantly.
- **Collaborative Shopping**: Share lists with family members or roommates for collaborative shopping.
- **Convenient Input**: Add items manually or through voice input for ease of use.

### 2. Price Comparison

- **Best Deals Finder**: Compare prices of items across local grocery stores to find the best deals.
- **Notifications**: Receive alerts about discounts, promotions, and coupons available nearby.
- **Preferred Stores**: Set favorite stores for personalized deal alerts.

### 3. Recipe Suggestions

- **Personalized Ideas**: Get recipe suggestions based on items in your shopping list or cart.
- **Dietary Filters**: Filter recipes according to dietary preferences (e.g., vegetarian, gluten-free, keto).
- **One-Tap Additions**: Add missing recipe ingredients to your shopping list with a single tap.

### 4. Dietary Preferences and Allergens

- **Custom Profiles**: Set and manage dietary profiles for tailored product and recipe suggestions.
- **Allergen Alerts**: Receive notifications for potential allergens in products and recipes.
- **Nutritional Information**: Access detailed nutritional data for informed decision-making.

### 5. Store Locator

- **Find Stores Nearby**: Locate grocery stores and view their hours, services, and distance.
- **Directions**: Get directions and estimated travel times to selected stores.
- **Store Deals**: View store-specific deals and inventory availability.

### 6. Real-Time Syncing

- **Cross-Device Sync**: Synchronize shopping lists and preferences across multiple devices.
- **Instant Updates**: Receive updates when shared lists are modified by others.
- **Offline Access**: Access shopping lists offline with automatic syncing when back online.

### 7. User Accounts and Authentication

- **Secure Login**: User registration and login with email verification.
- **Profile Management**: Update personal information and settings easily.
- **Data Security**: Data encryption to protect your information and privacy.

### 8. Recipe Management

- **Recipe Creation**: Users can create their own recipes with ingredients and instructions.
- **Recipe Viewing and Deletion**: Users can view and delete recipes from their personal collection.

### 9. Shopping List Management

- **Create, Edit, and Delete Lists**: Users can create, edit, and delete shopping lists.
- **Item Management**: Add, update, or remove items within a shopping list.

### 10. Budget Tracking

- **Cost Estimation**: Estimate total shopping costs based on current prices.
- **Budget Limits**: Set spending limits and receive alerts when nearing the limit.
- **Expense Reports**: View spending history and generate reports to monitor expenses.

---

## Getting Started

### Prerequisites

- **Web Browser**: Latest version of Chrome, Firefox, Safari, or Edge.
- **Local Development Environment**: PHP, MariaDB, Apache/Nginx (e.g., XAMPP or MAMP).
- **Composer**: PHP dependency manager.

### Installation

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/xGentuso/grocerly.git
   ```

2. **Install Dependencies**:
   Navigate to the project directory and install dependencies using Composer:
   ```sh
   composer install
   ```

3. **Set Up the Database**:
   - Import the database schema from `database/schema.sql` into your MariaDB server.
   - Update the database credentials in `config/config.php`.

4. **Run the Application**:
   - Start your local server (Apache/Nginx).
   - Navigate to `http://localhost/Grocerly_app/public/` to view the application.

---

## Usage

1. **Sign Up**:

   - Create a new account using your email address.
   - Verify your email to activate your account.

2. **Set Up Your Profile**:

   - Add personal details and dietary preferences.
   - Configure notification settings.

3. **Create a Shopping List**:

   - Add items manually or via barcode scanning.
   - Organize items into categories if desired.

4. **Manage Recipes**:

   - Create new recipes by adding ingredients and instructions.
   - View your saved recipes and delete them if needed.

5. **Track Your Budget**:

   - Set a budget for your shopping trip.
   - Monitor your estimated total as you add items.

6. **Go Shopping**:

   - Use the app in-store to check off items as you shop.
   - Access store maps and get directions if needed.

---

## Technologies Used

- **Frontend**:
  - HTML, CSS, JavaScript (React or Angular will be integrated)
  
- **Backend**:
  - PHP with Model-View-Controller (MVC) architecture
  
- **Database**:
  - MariaDB

- **APIs and Libraries**:
  - **PHP PDO**: For database interactions
  - **Composer**: Dependency management

- **Security**:
  - Data encryption for passwords
  - User authentication and session handling

---

## Contributing

Contributions are welcome! If you'd like to help improve Grocerly, please follow these steps:

1. **Fork the Repository**: Click on the 'Fork' button at the top right of the repository page.

2. **Clone the Forked Repo**:
   ```sh
   git clone https://github.com/xGentuso/grocerly.git
   ```

3. **Create a Feature Branch**:
   ```sh
   git checkout -b feature-name
   ```

4. **Commit Your Changes**:
   ```sh
   git commit -m "Add feature description"
   ```

5. **Push to Your Fork**:
   ```sh
   git push origin feature-name
   ```

6. **Open a Pull Request**: Describe your changes and submit for review.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

- **Project Maintainer**: Ryan Mota
- **Email**: [ryan.mota@triosstudent.com](mailto:ryan.mota@triosstudent.com)
- **GitHub**: [xGentuso](https://github.com/xGentuso)