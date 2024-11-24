
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    const heroSection = document.querySelector(".hero-section");
    
    const navbarHeight = navbar.offsetHeight;
    heroSection.style.height = `calc(100vh - ${navbarHeight}px)`;
});
