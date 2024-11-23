document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');
    const popup = document.createElement('div');
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);

    if (status === 'success') {
        popup.className = 'popup success';
        popup.innerHTML = `
            <p>Success!</p>
            <button id="closePopup">Close</button>
        `;
    } else if (status === 'error') {
        popup.className = 'popup error';
        popup.innerHTML = `
            <p>Failed!</p>
            <button id="closePopup">Try Again</button>
        `;
    }

    if (status) {
        document.body.appendChild(popup);
        // Add a small delay before showing the popup for a smoother animation
        setTimeout(() => {
            overlay.classList.add('show');
            popup.classList.add('show');
        }, 10);

        // Close popup when the button is clicked
        document.getElementById('closePopup').addEventListener('click', () => {
            popup.classList.remove('show');
            overlay.classList.remove('show');
            
            // Remove the popup and overlay after animation completes
            setTimeout(() => {
                popup.remove();
                overlay.remove();
                // Remove query parameter from the URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }, 300);
        });

        // Close popup when clicking overlay
        overlay.addEventListener('click', () => {
            document.getElementById('closePopup').click();
        });
    }
});