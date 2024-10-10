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
      profileInputs.forEach(input => input.disabled = false);
      editProfileButton.classList.add('hidden');
      saveProfileButton.classList.remove('hidden');
      cancelProfileButton.classList.remove('hidden');
    });

    saveProfileButton.addEventListener('click', () => {
      // Implement AJAX request to save profile
      // Example:
      const formData = new FormData(profileForm);
      fetch('/Grocerly_app/public/index.php?action=update_profile', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          alert(data.message);
          profileInputs.forEach(input => input.disabled = true);
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
});
