const toggle = document.getElementById("mobileToggle");
const menu = document.getElementById("mobileMenu");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
});
