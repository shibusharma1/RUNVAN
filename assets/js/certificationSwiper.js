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
