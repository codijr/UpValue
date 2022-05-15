var swiper = new Swiper('.swiper-testimonial', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  observer: true,
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