let navList = document.getElementById('js-nav-list');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function() {
    navList.classList.toggle('active');
});

window.addEventListener('resize', function() {
    if (window.innerwidth >= 800) {
        element.classList.remove('active');
    }
});