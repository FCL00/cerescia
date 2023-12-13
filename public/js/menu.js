document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const closeMobileMenuButton = document.getElementById("close-mobile-menu");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("invisible");
        mobileMenu.classList.toggle("opacity-100");
    });

    closeMobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.add("invisible");
        mobileMenu.classList.remove("opacity-100");
    });

    // // Adjust navbar background on scroll for sticky effect
    // window.addEventListener("scroll", function () {
    //     const navbar = document.querySelector(".fixed");
    //     navbar.classList.toggle("bg-rose-100", window.scrollY > 0);
    //     navbar.classList.toggle("bg-rose-500", window.scrollY === 0);
    // });
});
