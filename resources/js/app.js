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

