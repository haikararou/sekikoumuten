$(function () {
  /* hamburger button */
  $('#js-buttonHamburger').click(function () {
    $('body').toggleClass('is-drawerActive');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
    } else {
      $(this).attr('aria-expanded', false);
    }
  });

  /* smooth scroll */
  $('a[href^="#"]').click(function () {
    var id = $(this).attr('href');
    var target = $(id).offset();

    $('html, body').animate(
      {
        scrollTop: target.top,
      },
      //speed
      500
    );

    return false;
  });

  /* swiper1 */
  var swiper = new Swiper('.swiper1', {
    loop: true,
    effect: 'fade',
    speed: 2200,
    autoplay: {
      delay: 7800,
      disableOnInteraction: false,
    },
  });

  swiper.on('slideChange', function () {
    if (this.realIndex > 0) {
      this.params.autoplay.delay = 5000;
    }
  });

  /* swiper2 */
  // var swiper2;
  $(window).on('load resize', function () {
    var w = window.innerWidth;

    // console.log('リサイズ中');
    if (w <= 1023) {
      var mySwiper = new Swiper('.swiper2', {
        slidesPerView: 'auto',
        grabCursor: true,
      });
    } else {
      var getTranslate;
      var slideWidth;

      var mySwiper = new Swiper('.swiper2', {
        loop: true,
        slidesPerView: '2.5',
        initialSlide: 1,
        spaceBetween: 80,
        centeredSlides: true,

        allowTouchMove: true,
        freeMode: true,
        speed: 14000,
        autoplay: {
          delay: 300,
          disableOnInteraction: false,
        },
      });
    }
  });

  /*loding*/
  var h = $(window).height();
  $('#load-wrapper').height(h);

  var webStorage = function () {
    var $loading = $('body');
    let isFirst = false;
    if (sessionStorage.getItem('access')) {
      //2回目以降のアクセス
      $loading.addClass('is-repeater');
      // let element = document.getElementById('firstSlide');
      // element.dataset.swiperAutoplay = '4500';
    } else {
      //初回アクセス
      isFirst = true;
      $loading.addClass('is-first');
      sessionStorage.setItem('access', 0);
    }
    return isFirst;
  };
  const isFirst = webStorage();

  //ロード完了後の処理
  $(window).on('load', function () {
    if ($('#load-wrapper').length && isFirst) {
      setTimeout(function () {
        $('#load-wrapper').fadeOut(500, function () {
          $('body').addClass('is-load-done');
        });
      }, 1500);
    } else {
      $('body').addClass('is-load-done');
    }
  });

  var image = document.getElementsByClassName('js-parallax');
  new simpleParallax(image, {
    delay: 1.3,
    orientation: 'up',
    scale: 1.3,
  });
});
