function openDeleteModal() {
    document.getElementById("deleteModal").style.display = "flex";  
    document.getElementById("main-content").classList.add("blurred");
}
function closeModal() {
    document.getElementById("deleteModal").style.display = "none";
    document.getElementById("passwordModal").style.display = "none";
    document.getElementById("dconfirmationModal").style.display = "none";
    document.getElementById("main-content").classList.remove("blurred");
}
function openPasswordModal() {
    closeModal(); 
    document.getElementById("passwordModal").style.display = "flex"; 
}
function initiateProcess() {
    const password = document.getElementById("password").value;
    if (password) {
        closeModal(); 
        document.getElementById("dconfirmationModal").style.display = "flex"; 

        setTimeout(() => {
            document.getElementById("dconfirmationModal").style.display = "none"; 
        }, 3000);
    } else {
        alert("Please enter your password.");
    }
}
