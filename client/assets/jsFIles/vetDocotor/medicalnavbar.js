

// Select the Medical link and the parent menu item
const medicalLink = document.querySelector(".Medical-link");
const medicalMenu = medicalLink.closest(".nav-link");

// Add event listener to the Medical link
medicalLink.addEventListener("click", (e) => {
  e.preventDefault();
  medicalMenu.classList.toggle("open");
  console.log("Medical clicked");
  
  const hiddenListItems_Medical = document.getElementById("hiddenListItems-Medical");
  
  if (hiddenListItems_Medical) {
    hiddenListItems_Medical.style.display === "block"
      ? (hiddenListItems_Medical.style.display = "none")
      : (hiddenListItems_Medical.style.display = "block");
  }
});