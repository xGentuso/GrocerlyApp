// scripts.js

document.addEventListener('DOMContentLoaded', () => {
  // Profile Edit Functionality
  const editProfileButton = document.getElementById('editProfile');
  const saveProfileButton = document.getElementById('saveProfile');
  const cancelProfileButton = document.getElementById('cancelProfile');
  const profileForm = document.getElementById('profileForm');
  const profileInputs = profileForm.querySelectorAll('input');

  if (editProfileButton && saveProfileButton && cancelProfileButton) {
    editProfileButton.addEventListener('click', () => {
      // Enable input fields
      profileInputs.forEach(input => input.disabled = false);
      // Show Save and Cancel buttons, hide Edit button
      editProfileButton.classList.add('hidden');
      saveProfileButton.classList.remove('hidden');
      cancelProfileButton.classList.remove('hidden');
    });

    saveProfileButton.addEventListener('click', () => {
      // Gather form data
      const formData = new FormData(profileForm);

      // Send AJAX request to update profile
      fetch('/Grocerly_app/public/index.php?action=update_profile', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          alert(data.message);
          // Disable input fields
          profileInputs.forEach(input => input.disabled = true);
          // Show Edit button, hide Save and Cancel buttons
          editProfileButton.classList.remove('hidden');
          saveProfileButton.classList.add('hidden');
          cancelProfileButton.classList.add('hidden');
        } else {
          alert(data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating your profile.');
      });
    });

    cancelProfileButton.addEventListener('click', () => {
      // Reload the page to discard changes
      location.reload();
    });
  }

  // Optional: Newsletter Signup Form Submission
  const newsletterForm = document.querySelector('.newsletterForm');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const emailInput = newsletterForm.querySelector('input[name="newsletterEmail"]');
      const email = emailInput.value.trim();

      if (email) {
        // Simple email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert('Please enter a valid email address.');
          return;
        }

        // Send AJAX request to subscribe
        fetch('/Grocerly_app/public/index.php?action=subscribe_newsletter', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: `email=${encodeURIComponent(email)}`
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            alert(data.message);
            newsletterForm.reset();
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('An error occurred while subscribing to the newsletter.');
        });
      } else {
        alert('Please enter your email address.');
      }
    });
  }
});
