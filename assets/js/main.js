// Mobike navigation
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.querySelector(".mobile-nav-menu");

    menuToggle.addEventListener("click", function () {
        mobileMenu.classList.toggle("show");
    });
});

document.addEventListener("click", function (e) {
    const menu = document.querySelector(".mobile-nav-menu");
    const toggle = document.getElementById("menuToggle");

    if (!menu.contains(e.target) && !toggle.contains(e.target)) {
        menu.classList.remove("show");
    }
});

// Show menu on scroll
document.addEventListener('DOMContentLoaded', function () {
    window.addEventListener('scroll', function () {
        const nav = document.querySelector('nav');
        const ctnBtn = document.getElementById('scrollBtn');
        const scrollPoint = 500; // Scroll point

        if (window.scrollY > scrollPoint) {
            nav.classList.add('fixed');
            ctnBtn.classList.add('btn-outline-white');
            ctnBtn.classList.remove("btn-main");
        } else {
            nav.classList.remove('fixed');
            ctnBtn.classList.remove("btn-outline-white");
            ctnBtn.classList.add('btn-main');
        }
    });
});