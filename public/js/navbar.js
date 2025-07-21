let navButton = document.getElementsByClassName('navs')[0];
let navLinks = document.getElementsByClassName('links')[0];

navButton.onclick = function() {
    if (navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
        setTimeout(() => {
            navLinks.style.display = 'none';
        }, 400);
    } else {
        navLinks.style.display = 'block';
        setTimeout(() => {
            navLinks.classList.add('active');
        }, 10);
    }
}