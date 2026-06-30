// assets/js/programs.js

document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".program-filter");
  const programCards = document.querySelectorAll(".program-card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Active Button
      filterButtons.forEach((btn) => btn.classList.remove("active-filter"));

      button.classList.add("active-filter");

      const filter = button.dataset.filter;

      programCards.forEach((card) => {
        const category = card.dataset.category;

        if (filter === "all" || category === filter) {
          card.style.display = "block";

          setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "scale(1)";
          }, 10);
        } else {
          card.style.opacity = "0";
          card.style.transform = "scale(.95)";

          setTimeout(() => {
            card.style.display = "none";
          }, 200);
        }
      });
    });
  });
});
