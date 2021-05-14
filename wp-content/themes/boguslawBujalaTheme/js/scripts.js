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

          $("#"+dataDiv).removeClass('active');
          $("#"+dataID).slideUp('slow');
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

var dataId = $('#controls').data('id');

var $source = $("#audiotrack")[0],
    $track = $("#track"),
    $progress = $("#progress"),
    $play = $("#play"),
    $pause = $("#pause"),
    $playPause = $("#play, #pause"),
    $stop = $("#stop"),
    $mute = $("#mute"),
    $volume = $("#volume"),
    $level = $("#level");
    $skip_prev = $('#skip-prev');
    $skip_next = $('#skip-next');

var totalTime,
    timeBar,
    newTime,
    volumeBar,
    newVolume,
    cursorX;

var interval = null;


$(document).ready(function(){

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

  $("#pause").hide();

  function playPause(){
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
  };

  $playPause.click(function(){
    playPause();
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