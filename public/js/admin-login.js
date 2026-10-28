const passwordToggle = document.querySelector('[data-password-toggle]');
const passwordInput = document.getElementById('password');

if (passwordToggle && passwordInput) {
  passwordToggle.addEventListener('click', () => {
    const showPassword = passwordInput.type === 'password';
    passwordInput.type = showPassword ? 'text' : 'password';
    passwordToggle.textContent = showPassword ? 'Sembunyikan' : 'Tampilkan';
    passwordToggle.setAttribute('aria-label', showPassword ? 'Sembunyikan password' : 'Tampilkan password');
    passwordToggle.setAttribute('aria-pressed', String(showPassword));
  });
}
