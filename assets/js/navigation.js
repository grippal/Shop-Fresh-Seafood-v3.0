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

// Equivalent to the jQuery .ready() function
function ready(callbackFunc) {
    if (document.readyState !== 'loading') {
        // Document is already ready, call the callback directly
        callbackFunc();
    } else if (document.addEventListener) {
        // All modern browsers to register DOMContentLoaded
        document.addEventListener('DOMContentLoaded', callbackFunc);
    } else {
        // Old IE browsers
        document.attachEvent('onreadystatechange', function() {
            if (document.readyState === 'complete') {
                callbackFunc();
            }
        });
    }
}

function setActive() {
    aObj = document.getElementById('js-nav-list').getElementsByTagName('a');
    for (i = 0; i < aObj.length - 1; i++) {
        if (document.location.href.indexOf(aObj[i].href) >= 0) {
            aObj[i].className = 'active-page';
        }
    }
    if (document.location.href.indexOf('order.php') >= 0) {
        aObj[3].className = 'active-page-button';
    }
}

ready(setActive);