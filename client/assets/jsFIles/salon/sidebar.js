const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');

function toggleSidebar() {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');
    closeAllSubMenus();
}

function toggleSubMenu(button) {
    if (!button.nextElementSibling.classList.contains('show')) {
        closeAllSubMenus();
    }
    button.nextElementSibling.classList.toggle('show');
    button.classList.toggle('rotate');
    if (sidebar.classList.contains('close')) {
        sidebar.classList.remove('close');
        toggleButton.classList.remove('rotate');
    }
}

function closeAllSubMenus() {
    Array.from(sidebar.getElementsByClassName('sub-menu')).forEach(subMenu => {
        subMenu.classList.remove('show');
    });
    Array.from(sidebar.getElementsByClassName('rotate')).forEach(btn => {
        btn.classList.remove('rotate');
    });
}
