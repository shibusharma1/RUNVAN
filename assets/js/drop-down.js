document.querySelectorAll(".mobile-dropdown-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    const currentDropdown = btn.parentElement;

    // Close all other dropdowns
    document.querySelectorAll(".mobile-dropdown").forEach((dropdown) => {
      if (dropdown !== currentDropdown) {
        dropdown.classList.remove("active");
      }
    });

    // Toggle the current dropdown
    currentDropdown.classList.toggle("active");
  });
});
