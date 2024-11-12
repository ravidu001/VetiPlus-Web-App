function openLogout() {
    document.getElementById("modal").style.display = "flex";  
}

function closeLogout() {
    document.getElementById("modal").style.display="none";
}

function confirmLogout() {
    document.getElementById("modal").style.display = "none"; 
    window.location.href = "/logout";
}