const testimonialFilters = document.querySelectorAll(".testimonial-filter");

const testimonialCards = document.querySelectorAll(".testimonial-card");

testimonialFilters.forEach((button) => {
  button.addEventListener("click", () => {
    testimonialFilters.forEach((btn) => btn.classList.remove("active-filter"));

    button.classList.add("active-filter");

    const filter = button.dataset.filter;

    testimonialCards.forEach((card) => {
      const category = card.dataset.category;

      if (filter === "all" || category === filter) {
        card.style.display = "block";

        setTimeout(() => {
          card.style.opacity = "1";

          card.style.transform = "translateY(0)";
        }, 100);
      } else {
        card.style.opacity = "0";

        card.style.transform = "translateY(20px)";

        setTimeout(() => {
          card.style.display = "none";
        }, 250);
      }
    });
  });
});

// testimonial model
const modal = document.getElementById("testimonialModal");

const openBtn = document.getElementById("openTestimonialModal");

const closeBtn = document.getElementById("closeTestimonialModal");

const cancelBtn = document.getElementById("cancelModal");

openBtn.addEventListener("click", () => {
  modal.classList.remove("hidden");

  document.body.style.overflow = "hidden";
});

function closeModal() {
  modal.classList.add("hidden");

  document.body.style.overflow = "";
}

closeBtn.addEventListener("click", closeModal);

cancelBtn.addEventListener("click", closeModal);

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    closeModal();
  }
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeModal();
  }
});
