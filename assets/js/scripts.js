//Back To Top
function initBackToTop() {
  const scrollTopBtn = document.getElementById("scrollTop");
  // Exit if button doesn't exist
  if (!scrollTopBtn) return;
  // Show/Hide button on scroll
  window.addEventListener("scroll", () => {
    scrollTopBtn.classList.toggle("active", window.scrollY > 500);
  });
  // Smooth scroll to top
  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}
/*Certificate Filter */
function initCertificateFilter() {
  const filterBtns = document.querySelectorAll(".cert-filter");
  const certificationCards = document.querySelectorAll(".certification-card");
  // Exit if this section doesn't exist
  if (!filterBtns.length || !certificationCards.length) return;
  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Remove active class from all buttons
      filterBtns.forEach((b) => b.classList.remove("active-filter"));
      // Add active class to current button
      btn.classList.add("active-filter");
      const filter = btn.dataset.filter;
      certificationCards.forEach((card) => {
        const shouldShow = filter === "all" || card.classList.contains(filter);
        card.style.display = shouldShow ? "block" : "none";
      });
    });
  });
}
//  * Certificate Modal
function initCertificateModal() {
  const certificateModal = document.getElementById("certificateModal");
  const viewButtons = document.querySelectorAll(".view-certificate");
  const closeCertificateModal = document.getElementById(
    "closeCertificateModal",
  );
  const closeModalBtn = document.getElementById("closeModalBtn");
  // Exit if modal section doesn't exist
  if (
    !certificateModal ||
    !viewButtons.length ||
    !closeCertificateModal ||
    !closeModalBtn
  ) {
    return;
  }
  // Modal Elements
  const modalCertificateImage = document.getElementById(
    "modalCertificateImage",
  );
  const modalTitle = document.getElementById("modalTitle");
  const modalCategory = document.getElementById("modalCategory");
  const modalIssuer = document.getElementById("modalIssuer");
  const modalDate = document.getElementById("modalDate");
  const modalNumber = document.getElementById("modalNumber");
  const modalDescription = document.getElementById("modalDescription");
  // const modalPdf = document.getElementById("modalPdf");
  viewButtons.forEach((button) => {
    button.addEventListener("click", () => {
      modalCertificateImage.src = button.dataset.image;
      modalTitle.textContent = button.dataset.title;
      modalCategory.textContent = button.dataset.category;
      modalIssuer.textContent = button.dataset.issuer;
      modalDate.textContent = button.dataset.date;
      modalNumber.textContent = button.dataset.number;
      modalDescription.textContent = button.dataset.description;
      // modalPdf.href = button.dataset.pdf;
      certificateModal.classList.remove("hidden");
      document.body.style.overflow = "hidden";
    });
  });
  function closeCertificate() {
    certificateModal.classList.add("hidden");
    document.body.style.overflow = "";
  }
  closeCertificateModal.addEventListener("click", closeCertificate);
  closeModalBtn.addEventListener("click", closeCertificate);
  certificateModal.addEventListener("click", (e) => {
    if (e.target === certificateModal) {
      closeCertificate();
    }
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !certificateModal.classList.contains("hidden")) {
      closeCertificate();
    }
  });
}
//  Certification Swiper
function initCertificationSwiper() {
  // Exit if Swiper library is not loaded
  if (typeof Swiper === "undefined") return;
  // Exit if swiper doesn't exist on this page
  if (!document.querySelector(".certificationSwiper")) return;
  new Swiper(".certificationSwiper", {
    loop: true,
    speed: 800,
    autoplay: {
      delay: 3500,
    },
    spaceBetween: 30,
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
}
// Mobile Dropdown
function initMobileDropdown() {
  const dropdownButtons = document.querySelectorAll(".mobile-dropdown-btn");
  // Exit if dropdowns don't exist
  if (!dropdownButtons.length) return;
  dropdownButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const currentDropdown = btn.parentElement;
      // Close all other dropdowns
      document.querySelectorAll(".mobile-dropdown").forEach((dropdown) => {
        if (dropdown !== currentDropdown) {
          dropdown.classList.remove("active");
        }
      });
      // Toggle current dropdown
      currentDropdown.classList.toggle("active");
    });
  });
}
// Gallery Lightbox
function initGalleryLightbox() {
  // Exit if GLightbox library is not loaded
  if (typeof GLightbox === "undefined") return;
  // Exit if gallery doesn't exist
  if (!document.querySelector(".gallery-popup")) return;
  GLightbox({
    selector: ".gallery-popup",
    touchNavigation: true,
    loop: true,
  });
}
//  Gallery Filter
function initGalleryFilter() {
  const galleryFilters = document.querySelectorAll(".gallery-filter");
  const galleryItems = document.querySelectorAll(".gallery-item");
  // Exit if gallery section doesn't exist
  if (!galleryFilters.length || !galleryItems.length) return;
  galleryFilters.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      galleryFilters.forEach((btn) => btn.classList.remove("active-filter"));
      // Add active class to current button
      button.classList.add("active-filter");
      const filter = button.dataset.filter;
      galleryItems.forEach((item) => {
        const category = item.dataset.category;
        if (filter === "all" || category === filter) {
          item.style.display = "block";
          setTimeout(() => {
            item.style.opacity = "1";
          }, 50);
        } else {
          item.style.display = "none";
          setTimeout(() => {
            item.style.display = "none";
          }, 300);
        }
      });
    });
  });
}
//  Hero Swiper
function initHeroSwiper() {
  // Exit if Swiper library is not loaded
  if (typeof Swiper === "undefined") return;
  // Exit if swiper doesn't exist
  if (!document.querySelector(".heroSwiper")) return;
  new Swiper(".heroSwiper", {
    loop: true,
    speed: 1200,
    autoplay: {
      delay: 5000,
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });
}
//  Hero Typewriter
function initHeroTypewriter() {
  const element = document.getElementById("heroText");
  // Exit if hero text doesn't exist
  if (!element) return;
  const texts = [
    "Volunteer Leadership",
    "Community Development",
    "Social Impact",
    "Global Cooperation",
  ];
  let textIndex = 0;
  let charIndex = 0;
  function typeText() {
    if (charIndex < texts[textIndex].length) {
      element.textContent += texts[textIndex].charAt(charIndex);
      charIndex++;
      setTimeout(typeText, 80);
    } else {
      setTimeout(() => {
        element.textContent = "";
        charIndex = 0;
        textIndex++;
        if (textIndex >= texts.length) {
          textIndex = 0;
        }
        typeText();
      }, 2000);
    }
  }
  typeText();
}
//  Mobile Menu
function initMobileMenu() {
  const toggle = document.getElementById("mobileToggle");
  const menu = document.getElementById("mobileMenu");
  // Exit if mobile menu doesn't exist
  if (!toggle || !menu) return;
  // Toggle Menu
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
  // Close menu on scroll
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
}
//  Program Filter
function initProgramFilter() {
  const filterButtons = document.querySelectorAll(".program-filter");
  const programCards = document.querySelectorAll(".program-card");
  // Exit if program section doesn't exist
  if (!filterButtons.length || !programCards.length) return;
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
}
// Publication Filter
function initPublicationFilter() {
  const filterButtons = document.querySelectorAll(".publication-filter");
  const cards = document.querySelectorAll(".publication-card");
  // Exit if publication section doesn't exist
  if (!filterButtons.length || !cards.length) return;
  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      filterButtons.forEach((btn) => btn.classList.remove("active-filter"));
      // Add active class to current button
      button.classList.add("active-filter");
      const filter = button.dataset.filter;
      cards.forEach((card) => {
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
}
//  Team Modal
function initTeamModal() {
  const teamModal = document.getElementById("teamProfileModal");
  const viewButtons = document.querySelectorAll(".view-team-profile");
  const closeTeamBtn = document.getElementById("closeTeamModal");
  if (!teamModal || !viewButtons.length || !closeTeamBtn) return;
  const modalTeamImage = document.getElementById("modalTeamImage");
  const modalTeamName = document.getElementById("modalTeamName");
  const modalTeamPosition = document.getElementById("modalTeamPosition");
  const modalTeamEmail = document.getElementById("modalTeamEmail");
  const modalTeamDescription = document.getElementById("modalTeamDescription");
  const modalTeamLinkedin = document.getElementById("modalTeamLinkedin");
  const profileLink = document.getElementById("modalTeamProfileLink");
  const teamModalContent = document.getElementById("teamModalContent");
  viewButtons.forEach((button) => {
    button.addEventListener("click", function () {
      modalTeamImage.src = this.dataset.image;
      modalTeamName.textContent = this.dataset.name;
      modalTeamPosition.textContent = this.dataset.position;
      modalTeamEmail.textContent = this.dataset.email;
      modalTeamDescription.textContent = this.dataset.description;
      modalTeamLinkedin.href = this.dataset.linkedin;
      if (profileLink) {
        profileLink.href = this.dataset.profile;
      }
      teamModal.classList.remove("hidden");
      teamModal.classList.add("flex");
      setTimeout(() => {
        teamModalContent.classList.remove("opacity-0", "scale-95");
        teamModalContent.classList.add("opacity-100", "scale-100");
      }, 10);
      document.body.style.overflow = "hidden";
    });
  });
  function closeTeamModal() {
    teamModal.classList.add("hidden");
    teamModal.classList.remove("flex");
    document.body.style.overflow = "";
  }
  closeTeamBtn.addEventListener("click", closeTeamModal);
  teamModal.addEventListener("click", function (e) {
    if (e.target === this) {
      closeTeamModal();
    }
  });
}
// Testimonial Filter
function initTestimonialFilter() {
  const testimonialFilters = document.querySelectorAll(".testimonial-filter");
  const testimonialCards = document.querySelectorAll(".testimonial-card");
  if (!testimonialFilters.length || !testimonialCards.length) return;
  testimonialFilters.forEach((button) => {
    button.addEventListener("click", () => {
      testimonialFilters.forEach((btn) =>
        btn.classList.remove("active-filter"),
      );
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
}
// Testimonial Modal
function initTestimonialModal() {
  const modal = document.getElementById("testimonialModal");
  const openBtn = document.getElementById("openTestimonialModal");
  const closeBtn = document.getElementById("closeTestimonialModal");
  const cancelBtn = document.getElementById("cancelModal");
  if (!modal || !openBtn || !closeBtn || !cancelBtn) return;
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
}
// Testimonial Swiper
function initTestimonialSwiper() {
  if (typeof Swiper === "undefined") return;
  if (!document.querySelector(".testimonialSwiper")) return;
  new Swiper(".testimonialSwiper", {
    loop: true,
    speed: 800,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
}
document.addEventListener("DOMContentLoaded", () => {
  initBackToTop();
  initCertificateFilter();
  initCertificateModal();
  initCertificationSwiper();
  initMobileDropdown();
  initMobileMenu();
  initGalleryLightbox();
  initGalleryFilter();
  initHeroSwiper();
  initHeroTypewriter();
  initProgramFilter();
  initPublicationFilter();
  initTeamModal();
  initTestimonialFilter();
  initTestimonialModal();
  initTestimonialSwiper();
});
