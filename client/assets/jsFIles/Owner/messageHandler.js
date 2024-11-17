document.addEventListener('DOMContentLoaded', () => {
    const message = document.querySelector('.message');
    if (message) {
        setTimeout(() => {
            document.querySelector('.blurred-background').style.display = 'none';
            message.style.display = 'none';
            window.location.href = 'adminProfile.php'
        }, 3000);
    }
});