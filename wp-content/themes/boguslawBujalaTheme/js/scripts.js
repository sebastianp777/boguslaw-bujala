(function ($, root, undefined) {

	$(function () {

    });
    window.addEventListener('load', function () {

      lazyLoadFn();
    });
})(jQuery, this);

var lazyLoadFn = function () {
    $('.lazy').Lazy({
        effect: 'fadeIn',
        visibleOnly: false,
        scrollDirection: 'horizontal',
        autoDestroy: true,
        delay: 0,
        afterLoad: function (element) {
            $(element).removeClass('lazy-loading lazy');
        },
        onFinishedAll: function () {
          jQuery('.lazy-loading').removeClass('lazy-loading lazy');
          if (window.location.hash) {
              var hash = window.location.hash;
              var el = document.querySelector(hash);
              if (el) {
                  el.scrollIntoView({behavior: "smooth"});
              }
          }
      }
  });
}



var HomeCompanies = new Swiper('.homepage__publications .swiper-container', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next-custom-our',
        prevEl: '.swiper-button-prev-custom-our',
      },
      autoplay: {
        delay: 4000,
      },
      breakpoints: {
        767: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
    },

    scrollbar: {
      el: '.swiper-scrollbar',
    },

  });

