var swiper = new Swiper('.swiper-testimonial', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  loop:true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4000,
    disableOnInteraction:false,
  },
  breakpoints: {
    992: {
      slidesPerView: 3,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});