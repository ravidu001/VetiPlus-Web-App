const body = document.querySelector("body"),
  sidebar = document.querySelector(".sidebar"),
  toggle = document.querySelector(".toggle"),
  searchBtn = document.querySelector(".search-box"),
  modeSwitch = document.querySelector(".toggle-switch"),
  modeText = document.querySelector(".mode-text");


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

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});
