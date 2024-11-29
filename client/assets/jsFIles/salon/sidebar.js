const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');
const dashboardContent = document.querySelector('.pagecontent');
const footer = document.querySelector('.footer');

function toggleSidebar() {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');
    closeAllSubMenus();

    if(sidebar.classList.contains('close')){
        dashboardContent.style.marginLeft = '70px';
        dashboardContent.style.width = 'calc(100% - 70px)';
        footer.style.marginLeft = '70px';
        footer.style.width = 'calc(100% - 70px)';
    } else {
        dashboardContent.style.marginLeft = '250px';
        dashboardContent.style.width = 'calc(100% - 250px)';
        footer.style.marginLeft = '250px';
        footer.style.width = 'calc(100% - 250px)';
    }
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
