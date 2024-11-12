function openModal(){
    document.getElementById('passwordModal').style.display ="block";
}
function closeModal(){
    document.getElementById('passwordModal').style.display ='none';
    document.getElementById('passwordForm').style.display ='none';
    document.getElementById('successMessage').style.display ='none';

}
function showPasswordForm(){
    document.getElementById('passwordForm').style.display = 'block';
}
function changePassword(event){
    event.preventDefault();
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
      
    if(newPassword === confirmPassword){
        document.getElementById('passwordForm').style.display ='none';
        document.getElementById('successMessage').style.display ='block';

        setTimeout(() => {
            document.getElementById("passwordModal").style.display = "none"; 
        }, 2000);

    } else {
        alert("passwords do not match.Please try again");
    }
}
window.onclick = function(event){
    const modal = document.getElementById('passwordModal');
    if(event.traget == modal){
        closeModal();
    }
}