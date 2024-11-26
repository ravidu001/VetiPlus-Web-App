const body = document.querySelector("body"),
  sidebar = document.querySelector(".sidebar"),
  toggle = document.querySelector(".toggle"),
  searchBtn = document.querySelector(".search-box"),
  modeSwitch = document.querySelector(".toggle-switch"),
  modeText = document.querySelector(".mode-text");

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



modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  sidebar.classList.toggle("dark");
  searchBtn.classList.toggle("dark");
  modeText.classList.toggle("dark");
  modeSwitch.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    modeText.textContent = "Light Mode";
  } else {
    modeText.textContent = "Dark Mode";
  }
});

toggle.addEventListener("click", () => {
  body.classList.toggle("close");
  sidebar.classList.toggle("close");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode";
  } else {
    modeText.innerText = "Dark Mode";
  }
});
