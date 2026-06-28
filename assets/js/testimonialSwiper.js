const testimonialSwiper = new Swiper(".testimonialSwiper", {
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
