var swiper = new Swiper('.swiper-partners', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  loop: true,
  // observer: true,
  // observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  slidesPerView: 2,
  spaceBetween: 0,
  autoplay: {
    enabled: true,
    delay: 3000,
    disableOnInteraction:false,
  },
  breakpoints: {
    768: {
      slidesPerView: 5,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

var swiper = new Swiper('.swiper-testimonial', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  observer: true,
  loop: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    enabled: true,
    delay: 3000,
    disableOnInteraction:false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});