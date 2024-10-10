document.addEventListener('DOMContentLoaded', () => {
  const passwordField = document.querySelector('input[name="password"]');
  const strengthIndicator = document.getElementById('password-strength');

  passwordField.addEventListener('input', () => {
    const value = passwordField.value;
    let strength = "Weak";

    if (value.length > 8 && /[A-Z]/.test(value) && /\d/.test(value) && /[!@#$%^&*]/.test(value)) {
      strength = "Strong";
    } else if (value.length > 6 && /[A-Z]/.test(value) && /\d/.test(value)) {
      strength = "Moderate";
    }

    strengthIndicator.textContent = `Password Strength: ${strength}`;
  });
});
