var swiper = new Swiper('.swiper-solutions', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  spaceBetween: 25,
  observeParents: true,
  setWrapperSize:true,
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.swiper-partners', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  loop: true,
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
  observeParents: false,
  setWrapperSize:true,
  centeredSlides: true,
  slidesPerView: 1,
  autoplay: {
    enabled: true,
    delay: 3000,
    disableOnInteraction:false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
    type: 'bullets',
  },
});