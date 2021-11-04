/*
 ██████  ██████  ███    ██ ███████ ██  ██████
██      ██    ██ ████   ██ ██      ██ ██
██      ██    ██ ██ ██  ██ █████   ██ ██   ███
██      ██    ██ ██  ██ ██ ██      ██ ██    ██
 ██████  ██████  ██   ████ ██      ██  ██████
 CAROUSEL CONFIG
 */

 $('.ball-flipster').flipster({
    touch: true,
    scrollwheel: false,
    loop: true,
    buttons: true,
    style: 'flat',
    spacing: -0.1,
    // nav: true,
});

$('.uniform-flipster').flipster({
    touch: true,
    scrollwheel: false,
    loop: true,
    buttons: true,
    style: 'flat',
    spacing: -0.3,
    // nav: true,
});

function debounce(func, wait = 5, immediate = true) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };
  
  const sliderImages = document.querySelectorAll('.slide-in');
  function checkSlide() {
      sliderImages.forEach(
          sliderImage => {
              const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.offsetHeight / 2;
              //console.log(sliderImage.offsetHeight);
              const imageBottom = sliderImage.offsetTop + sliderImage.offsetHeight;
              //console.log(sliderImage.offsetTop);
              const isHalfShown = slideInAt > sliderImage.offsetTop;
              const isNotScrolledPast = window.scrollY < imageBottom;
              //console.log(slideInAt);
              if (isHalfShown && isNotScrolledPast) {
                sliderImage.classList.add('active');
              } else {
                sliderImage.classList.remove('active');
              }
          }
      );
  }
  window.addEventListener('scroll', debounce(checkSlide));

  const sliderImagesF = document.querySelectorAll('.slide-first');
  function setSlide() {
      sliderImagesF.forEach(
          sliderImageF => {
              sliderImageF.classList.add('active');
          }
      );
  }
  window.addEventListener('load', debounce(setSlide));