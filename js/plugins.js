jQuery(document).ready(function( $ ) { //noconflicts
  console.log('plugins initilized.');

  // WOW Animate effects
  // new WOW().init();

  // Tiny Slides 3
  if ($(".tiny-slider-trio").length > 0) {

    var slider = tns({
      container: '.tiny-slider-trio',
      items: 1,
      gutter: 20,
      slideBy: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayButton: false,
      autoplayPosition: 'bottom',
      autoplayButtonOutput: false,
      controls: false,
      controlsPosition: 'bottom',
      nav: true,
      navPosition: 'bottom',
      responsive: {
        480: { items: 1 },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 3 }
      }
    });
  }

  // Tiny Slides 4
  if ($(".tiny-silder-quadra").length > 0) {

    var slider = tns({
      container: '.tiny-silder-quadra',
      items: 1,
      gutter: 20,
      slideBy: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayButton: false,
      autoplayPosition: 'bottom',
      autoplayButtonOutput: false,
      controls: false,
      controlsPosition: 'bottom',
      nav: true,
      navPosition: 'bottom',
      responsive: {
        480: { items: 1 },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 4 },
        1200: { items: 4 }
      }
    });
  }

  // Tiny Slides 5
  if ($(".tiny-slider-penta").length > 0) {

    var slider = tns({
      container: '.tiny-slider-penta',
      items: 1,
      gutter: 20,
      slideBy: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayButton: false,
      autoplayPosition: 'bottom',
      autoplayButtonOutput: false,
      controls: false,
      controlsPosition: 'bottom',
      nav: true,
      navPosition: 'bottom',
      responsive: {
        480: { items: 1 },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 4 },
        1200: { items: 5 }
      }
    });
  }

  // Tiny Slider center
  if ($(".tiny-slider-center").length > 0) {

    var slider2 = tns({
      container: '.tiny-slider-center',
      items: 1,
      gutter: 0,
      slideBy: 1,
      center: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayButton: false,
      autoplayPosition: 'bottom',
      autoplayButtonOutput: false,
      controls: false,
      controlsPosition: 'bottom',
      nav: true,
      navPosition: 'bottom',
      onInit: setSlides(),
      responsive: {
        480: { items: 1 },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 4 },
        1200: { items: 4 }
      }
    });

    slider2.events.on('indexChanged', function(){
      setSlides();
    });

    function setSlides(){
      $('.tiny-slider-center .tiny-item.tns-item').removeClass('firstly middle lastly');
      $('.tiny-slider-center .tns-slide-active:eq(0)').addClass('firstly');
      $('.tiny-slider-center .tns-slide-active:eq(2)').addClass('middle');
      $('.tiny-slider-center .tns-slide-active:eq(4)').addClass('lastly');
      // console.log('tiny centered');
    }

  }



  // init parallax
  var parallax_img = document.getElementsByClassName('parallax-img');
  new simpleParallax(parallax_img, {
    scale: 1.2
  });

  // refresh on resize
  window.onresize = function(event) {
    console.log('window resized');
  };

  //destroy on phones
  if( getMobileOS() ){
    // parallax_img.destroy();
    console.log('parallax destroyed');
  }

  //check if phones
  function getMobileOS() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    // console.log('user agent: '+userAgent);
    if (/windows phone/i.test(userAgent)) {
      return true;
    }
    if (/android/i.test(userAgent)) {
      return true;
    }
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return true;
    }
    return false;
  }


  // back to top
  backToTop();
  function backToTop(){
    $(".back-to-top").css("display","none");
    $(window).scroll(function(){
      if($(window).scrollTop() > 0 ){
        $(".back-to-top").fadeIn(300);
      } else {
        $(".back-to-top").fadeOut(300);
      }
    });
    $(".back-to-top").click(function(){
      $("html, body").animate({
        scrollTop: 0
      }, 500);
    });
  };


}); //jQuery end
