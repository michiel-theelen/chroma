
var mySwiper = new Swiper ('.swiper-container1', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 'auto',
  speed: 500,
  centeredSlides: true,
  spaceBetween: 5,

  // Disable preloading of all images
  preloadImages: false,
  lazy: {
    loadPrevNext: true,
    loadPrevNextAmount: 1,
    loadOnTransitionStart: true,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination1',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar1',
  },
})

var mySwiper2 = new Swiper ('.swiper-container2', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 'auto',
  speed: 500,
  centeredSlides: true,
  keyboard: true,
  spaceBetween: 0,
  slideToClickedSlide: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination2',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar2',
  },
})

var mySwiper3 = new Swiper ('.swiper-container3', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  speed: 500,
  centeredSlides: true,
  keyboard: true,
  spaceBetween: 0,
  effect: 'fade',
  crossFade: true,

  // Disable preloading of all images
  preloadImages: false,
  // Enable lazy loading
  lazy: {
    loadPrevNext: true,
    loadPrevNextAmount: 1,
    loadOnTransitionStart: true,
  },

  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
        el: '.swiper-pagination3',
        clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next3',
    prevEl: '.swiper-button-prev3',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar3',
  },
})
