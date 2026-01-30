import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-toggle-password]').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const icon = button.querySelector('i');

            if (!input) return;

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const logoutForm = document.getElementById('logout-form');

    logoutForm.addEventListener('submit', function(e) {
        e.preventDefault(); // prevent immediate submission

        if (confirm("Are you sure you want to logout?")) {
            logoutForm.submit(); // submit only if user confirms
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('password');
    if (!passwordInput) return;

    const rules = {
        length: v => v.length >= 8,
        lower: v => /[a-z]/.test(v),
        upper: v => /[A-Z]/.test(v),
        number: v => /[0-9]/.test(v),
        symbol: v => /[^A-Za-z0-9]/.test(v),
    };

    passwordInput.addEventListener('input', () => {
        const value = passwordInput.value;

        Object.keys(rules).forEach(rule => {
            const item = document.querySelector(`[data-rule="${rule}"]`);
            if (!item) return;

            if (rules[rule](value)) {
                item.classList.remove('text-gray-400');
                item.classList.add('text-green-500');
                item.textContent = item.textContent.replace('•', '✔');
            } else {
                item.classList.remove('text-green-500');
                item.classList.add('text-gray-400');
                item.textContent = item.textContent.replace('✔', '•');
            }
        });
    });
});
const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('password_confirmation');
const matchText = document.getElementById('password-match');

confirmInput.addEventListener('input', () => {
    if (!confirmInput.value) {
        matchText.textContent = 'Passwords must match';
        matchText.classList.remove('text-green-500', 'text-red-500');
        matchText.classList.add('text-gray-400');
        return;
    }

    if (confirmInput.value === passwordInput.value) {
        matchText.textContent = '✔ Passwords match';
        matchText.classList.remove('text-gray-400', 'text-red-500');
        matchText.classList.add('text-green-500');
    } else {
        matchText.textContent = 'Passwords do not match';
        matchText.classList.remove('text-gray-400', 'text-green-500');
        matchText.classList.add('text-red-500');
    }
});