// Select the Appointment link and the parent menu item
const appointmentLink = document.querySelector(".appointment-link");
const appointmentMenu = appointmentLink.closest(".nav-link");

// Add event listener to the Appointment link
appointmentLink.addEventListener("click", (e) => {
  e.preventDefault();
  appointmentMenu.classList.toggle("open");
  console.log("Appointment clicked");
  
  const hiddenListItems_Appointment = document.getElementById("hiddenListItems-Appointment");
  
  if (hiddenListItems_Appointment) {
    hiddenListItems_Appointment.style.display === "block"
      ? (hiddenListItems_Appointment.style.display = "none")
      : (hiddenListItems_Appointment.style.display = "block");
  }
});