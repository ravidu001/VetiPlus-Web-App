

// Select the Medical link and the parent menu item
const reviewLink = document.querySelector(".Review-link");
const reviewMenu = reviewLink.closest(".nav-link");

// Add event listener to the Medical link
reviewLink.addEventListener("click", (e) => {
  e.preventDefault();
  reviewMenu.classList.toggle("open");
  console.log("Review clicked");
  
  const hiddenListItems_Review = document.getElementById("hiddenListItems-Review");
  
  if (hiddenListItems_Review) {
    hiddenListItems_Review.style.display === "block"
      ? (hiddenListItems_Review.style.display = "none")
      : (hiddenListItems_Review.style.display = "block");
  }
});