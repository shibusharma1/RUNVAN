const toggle = document.getElementById("mobileToggle");
const menu = document.getElementById("mobileMenu");

toggle.addEventListener("click", (e) => {
  e.stopPropagation(); // Prevent immediate closing
  menu.classList.toggle("active");
});

// Close when clicking outside
document.addEventListener("click", (e) => {
  if (
    menu.classList.contains("active") &&
    !menu.contains(e.target) &&
    !toggle.contains(e.target)
  ) {
    menu.classList.remove("active");
  }
});

// window.addEventListener("scroll", () => {
//   if (menu.classList.contains("active")) {
//     menu.classList.remove("active");
//   }
// });

let lastScroll = window.scrollY;

window.addEventListener("scroll", () => {
  if (
    menu.classList.contains("active") &&
    Math.abs(window.scrollY - lastScroll) > 5
  ) {
    menu.classList.remove("active");
  }

  lastScroll = window.scrollY;
});
