window.addEventListener('load', function() {
  var loaderContainer = document.querySelector('.loader-container');
  loaderContainer.style.opacity = '0'; /* Fade out */

  setTimeout(function() {
    loaderContainer.style.display = 'none'; /* Hide after transition */
  }, 1000); /* Match this with the CSS transition duration */
});
//-- start swiper
$(document).ready(function() {
  // Select the swiper-container element
  var swiperContainer = $('.custom-swiper-container')[0];

  // Add hover event listeners
  $(swiperContainer).on('mouseover', function() {
    // Pause autoplay on hover
    swiperContainer.swiper.autoplay.stop();
  });

  $(swiperContainer).on('mouseout', function() {
    // Resume autoplay when mouse leaves
    swiperContainer.swiper.autoplay.start();
  });
});






$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('.nav-links').toggleClass('active');
    });

    $('.nav-link').click(function(){
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});
//-------------------------------

var isFirefox = typeof InstallTrigger !== 'undefined';

if (isFirefox === true) {
    $(".Content-job").css("letter-spacing","0");
    $(".imgs-Parent").css({"position":"relative","width":"253px","float":"left;"})
}
$(window).scroll(function() {

    "use strict";

    if ($(window).scrollTop() > 159) {

        $(".navColor").addClass("sticky");

    } else if ($(window).scrollTop() === 0) {
        $(".navColor").removeClass("sticky");
    }

  });

$(window).scroll(function() {
    "use strict";

    if ($(window).scrollTop() < 885)
    {
        $("#L1").addClass("active");
    } else {

        $("#L1").removeClass("active");
    }
});

$(window).scroll(function() {
    "use strict";

    if ($(window).scrollTop() > 885)
    {
        $("#L2").addClass("active");
    } else {

        $("#L2").removeClass("active");
    }
});

$(window).scroll(function() {
    "use strict";

    if ($(window).scrollTop() > 1540)
    {
        $("#L3").addClass("active");
        $("#L2").removeClass("active");
    } else {

        $("#L3").removeClass("active");
    }
});

$(window).scroll(function() {
    "use strict";

    if ($(window).scrollTop() > 1650)
    {
        $("#L4").addClass("active");
        $("#L2").removeClass("active");
        $("#L3").removeClass("active");
    } else {

        $("#L4").removeClass("active");
    }
});

$(".one").on('click', function() {
    "use strict";
      window.scrollTo(0, 0);
  });

$(".Tow").on('click', function() {
    "use strict";
      window.scrollTo(0, 920);
  });

$(".Three").on('click', function() {
    "use strict";
      window.scrollTo(0, 1570);
  });
$(".nav-lnik:last-child").on('click', function() {
    "use strict";
      window.scrollTo(0, 99999);
  });
var btn = $('#myBtn');

  $(window).scroll(function() {
    "use strict";

    if ($(window).scrollTop() > 250) {
      btn.css("display","block");
    } else {
      btn.fadeOut();
    }

  });

  btn.on('click', function() {
    "use strict";
        window.scrollTo(0, 0);
  });
$("textarea").val("");
/* SLIDER Starts */
// First setp move slider on click to right
var slideContainer = $(".first-color"), // get the section
    slide = $(".images"), // get the parent
    nextBtn = $("#nextButton"), // get the nextButton
    prevBtn = $("#prevButton"); // get the prevButton
    // for move automatically interval = 2000;

var slides = $(".imgs-Parent"),
    index = 1;

var slideWidth = slides.eq(index).innerWidth();
//slide.style.transform = `translateX(${-slideWidth * index}px)`

//slide.css({'transform' : 'translateX(' + -slideWidth * index + 'px '});
// Typing code
$(document).ready(function() {
  function typeEffect(headerElement, spanElement, texts, typeSpeed, pause, deleteSpeed) {
    var i = 0;
    var isDeleting = false;
    var currentTextIndex = 0;

    function type() {
      var headerText = texts[currentTextIndex][0];
      var spanText = texts[currentTextIndex][1];

      if (!isDeleting && i < headerText.length) {
        headerElement.append(headerText.charAt(i));
        spanElement.append(spanText.charAt(i));
        i++;
        setTimeout(type, typeSpeed);
      } else if (isDeleting && i > 0) {
        headerElement.text(headerText.substring(0, i - 1));
        spanElement.text(spanText.substring(0, i - 1));
        i--;
        setTimeout(type, deleteSpeed);
      } else if (!isDeleting && i === headerText.length) {
        setTimeout(function() {
          isDeleting = true;
          setTimeout(type, deleteSpeed);
        }, pause);
      } else if (isDeleting && i === 0) {
        isDeleting = false;
        currentTextIndex = (currentTextIndex + 1) % texts.length;
        setTimeout(type, typeSpeed);
      }
    }

    type();
  }

  var headerElement = $('#typingHeader');
  var spanElement = $('#typingSpan');
  var texts = [
    ['Welcome to Portfolio ', '3D designer'],
    ['Working as                 ', 'Mechanical Engineer']
  ];
  typeEffect(headerElement,spanElement, texts, 150, 6000, 150);
});
// end typing
// start follow mouse effect
$(document).ready(function() {
  var $cube = $('.thecube');

  $(document).on('mousemove', function(e) {
    // احسب محاور الدوران بناءً على موقع الماوس
    var xAxis = (e.clientY / $(window).height()) * 360;
    var yAxis = (e.clientX / $(window).width()) * 360;

    // أوقف التحريك التلقائي (الذي يتم من خلال CSS)
    $cube.css('animation', 'none');

    // طبق التحويلات بناءً على موقع الماوس
    $cube.css('transform', `rotateX(${xAxis}deg) rotateY(${yAxis}deg)`);
  });

  // أعد التحريك التلقائي عند مغادرة الماوس
  $(document).on('mouseleave', function() {
    $cube.css('animation', 'rotate 2.5s infinite linear');
  });
});

//end
