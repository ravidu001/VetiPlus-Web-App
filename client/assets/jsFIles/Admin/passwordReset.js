function openConfirmModal() {
    document.getElementById("modal").style.display = "flex";  
    document.getElementById("main-content").classList.add("blurred"); 
}

function closeModal() {
    document.getElementById("modal").style.display = "none"; 
    document.getElementById("main-content").classList.remove("blurred"); 
}

function confirmReset() {
    closeModal(); 
    document.getElementById("confirmationModal").style.display = "flex"; 

    setTimeout(() => {
        document.getElementById("confirmationModal").style.display = "none"; 
        document.getElementById("main-content").classList.remove("blurred"); 
    }, 3000);
}