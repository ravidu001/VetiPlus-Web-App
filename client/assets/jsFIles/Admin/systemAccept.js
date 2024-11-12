let currentAction = '';

function openModal(action) {
    currentAction = action;
    const modal = document.getElementById('systemModal');
    const message = action === 'accept' 
                    ? 'Do you want to accept this system?' 
                    : 'Do you want to decline this system?';
    document.getElementById('modal-message').innerText = message;
    modal.style.display = 'flex';
}

function closeModal() {
    document.getElementById('systemModal').style.display = 'none';
}
function confirmAction() {
    closeModal();
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 4000);
}
