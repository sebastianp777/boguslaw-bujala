(function ($, root, undefined) {

	$(function () {

      $(document).ready(function(){
        $(".review__section__inner .read-more").click(function(){
          $(this).parent().parent().parent().toggleClass('active');
          var dataID = $(this).data('id');
          if($(this).parent().parent().parent().hasClass('active')){
            $("#"+dataID).slideDown('slow');
          }else{
            $("#"+dataID).slideUp('slow');
          }
        });

        $(".review__section__inner .show-less").click(function(){
          var dataID = $(this).data('id');
          var dataDiv = $(this).data('div');
          console.log(dataDiv);

          $("#"+dataDiv).removeClass('active');
          $("#"+dataID).slideUp('slow');
        });

        $('.custom-click-show-1 a').click(function(){
          $(this).toggleClass('clicked');
          if($(this).hasClass('clicked')){
            $('.hideable-text1').slideDown('slow');
          }else{
            $('.hideable-text1').slideUp('slow');
          }
        });

        $('.custom-click-show-2 a').click(function(){
          $(this).toggleClass('clicked');
          if($(this).hasClass('clicked')){
            $('.hideable-text-2').slideDown('slow');
          }else{
            $('.hideable-text-2').slideUp('slow');
          }
        });

        $('.custom-click-show-less-1 a').click(function(){
          $('.custom-click-show-1 a').removeClass('clicked');
          $('.hideable-text1').slideUp('slow');
        });
        $('.custom-click-show-less-2 a').click(function(){
          $('.custom-click-show-2 a').removeClass('clicked');
          $('.hideable-text-2').slideUp('slow');
        });

      });

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
          slidesPerView: 2,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
    },

    scrollbar: {
      el: '.swiper-scrollbar',
    },

  });

  $(".pause").css('display', 'none');

$(".play, .pause").click(function(){


  let gobID = $(this).data('id');

  var $source = $('#'+gobID+" .audiotrack")[0],
    $track = $('#'+gobID+" .track"),
    $progress = $('#'+gobID+" .progress"),
    $play = $('#'+gobID+" .play"),
    $pause = $('#'+gobID+" .pause"),
    $playPause = $('#'+gobID+" .play, #"+gobID+" .pause"),
    $stop = $('#'+gobID+" .stop"),
    $mute = $('#'+gobID+" .mute"),
    $volume = $('#'+gobID+" .volume"),
    $level = $('#'+gobID+" .level");
    $skip_prev = $('#'+gobID+' .skip-prev');
    $skip_next = $('#'+gobID+' .skip-next');

var totalTime,
    timeBar,
    newTime,
    volumeBar,
    newVolume,
    cursorX;

var interval = null;


if ($source.paused){
  $source.play();
  $pause.show();
  $play.hide();
  interval = setInterval(barState, 50);
}
else {
  $source.pause();
  $play.show();
  $pause.hide();
};


  function barState(){
    if (!$source.ended){
      var totalTime = parseInt($source.currentTime / $source.duration * 100);
      $progress.css({"width": totalTime+1 + "%"});
    }
    else if ($source.ended){
      $play.show();
      $pause.hide();
      clearInterval(interval);
    };
  };

  $track.click(function(e){
    if (!$source.paused){
      var timeBar = $track.width();
      var cursorX = e.pageX - $track.offset().left;
      var newTime = cursorX * $source.duration / timeBar;
      $source.currentTime = newTime;
      $progress.css({"width": cursorX + "%"});
    };
  });

  function restart(){
      $source.pause();
      interval = setInterval(barState, 50);
      $source.currentTime = 0;
      $progress.css({"width": "0%"});
      $pause.show();
      $play.hide();
      $source.play();
  };

  $stop.click(function(){
    restart();
  });


  function skip_next(){
    $source.currentTime += 5;
  };

  $skip_next.click(function(){
    skip_next();
  });

  function skip_prev(){
    $source.currentTime -= 5;
  };

  $skip_prev.click(function(){
    skip_prev();
  });

  function mute(){
    if ($source.muted){
      $source.muted = false;
      $(".icon-muted").attr("src","/wp-content/themes/boguslawBujalaTheme/img/feather-volume-1.svg");
    }
    else {
      $source.muted = true;
      $(".icon-muted").attr("src","/wp-content/themes/boguslawBujalaTheme/img/volume-mute.svg");
    };
  };

  $mute.click(function(){
    mute();
  });
s
  $volume.click(function(e){
    var volumeBar = $volume.width();
    var cursorX = e.pageX - $volume.offset().left;
    var newVolume = cursorX / volumeBar;
    $source.volume = newVolume;
    $level.css({"width": cursorX + "px"});
    $source.muted = false;
    $mute.removeClass("mute");
  });

});