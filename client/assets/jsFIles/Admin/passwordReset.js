function openConfirmModal() {
    document.getElementById("modal").style.display = "flex";  
    document.getElementById("main-content").classList.add("blurred"); 
}

function pcloseModal() {
    document.getElementById("main-content").classList.remove("blurred"); 
    document.getElementById("modal").style.display="none";
}

function confirmReset() {
    document.getElementById("modal").style.display = "none"; 
    document.getElementById("confirmationModal").style.display = "flex"; 

    setTimeout(() => {
        document.getElementById("confirmationModal").style.display = "none"; 
        document.getElementById("main-content").classList.remove("blurred"); 
    }, 3000);
}