let navbarToggler = document.querySelector('.header .navbar-toggler');
let navbarTogglerIcon = navbarToggler.querySelector('.navbar-toggler-icon svg');

navbarToggler.addEventListener('click', function() {
    if (!navbarToggler.classList.contains('collapsed')) {
        navbarTogglerIcon.style.fill = 'white';
    } else {
        navbarTogglerIcon.style.fill = '#1a3a57';
    }
});