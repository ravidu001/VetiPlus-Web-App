function openConfirmModal() {
    document.getElementById("modal").style.display = "flex";  
    
}

function pcloseModal() {
    
    document.getElementById("modal").style.display="none";

}

function confirmReset() {
    document.getElementById("modal").style.display = "none"; 
    document.getElementById("confirmationModal").style.display = "flex"; 

    setTimeout(() => {
        document.getElementById("confirmationModal").style.display = "none"; 
        
    }, 3000);
}