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