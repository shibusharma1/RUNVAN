//glightbox selector
const lightbox = GLightbox({
  selector: ".gallery-popup",
  touchNavigation: true,
  loop: true,
});

//filters
const galleryFilters = document.querySelectorAll(".gallery-filter");

const galleryItems = document.querySelectorAll(".gallery-item");

galleryFilters.forEach((button) => {
  button.addEventListener("click", () => {
    galleryFilters.forEach((btn) => btn.classList.remove("active-filter"));

    button.classList.add("active-filter");

    const filter = button.dataset.filter;

    galleryItems.forEach((item) => {
      const category = item.dataset.category;

      if (filter === "all" || category === filter) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  });
});
