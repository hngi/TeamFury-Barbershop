// Hamburger Toggle
let hambIcon = document.querySelector('.hamb-icon');
let navItems = document.querySelector('.nav-items');
let body = document.querySelector('.position')
hambIcon.addEventListener('click', () => {
    navItems.classList.toggle('active')
})
body.addEventListener('click', () => {
    navItems.classList.remove('active')
})
// Hamburger Toggle