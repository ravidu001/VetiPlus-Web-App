
function setActiveNavItem() {
    
    const currentPage = window.location.pathname.split('/').pop();

    
    const pageToNavId = {
        'Home.php': 'home_id',
        'Tool.php': 'tool',
        'ContactUs.html': 'contact',
        'AboutUs.html': 'about'
    };

    
    const navbarItems = document.querySelectorAll('.navbarone .navbarcontent');

    
    navbarItems.forEach(nav => nav.classList.remove('active'));

    
    if (pageToNavId[currentPage]) {
        document.querySelector(`#${pageToNavId[currentPage]} .navbarcontent`).classList.add('active');
    }
}


document.addEventListener('DOMContentLoaded', function() {
    setActiveNavItem();
});
