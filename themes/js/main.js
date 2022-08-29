/** @format */

(function ($) {
  "use strict";

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  $("nav .dropdown").hover(
    function () {
      var $this = $(this);
      // 	 timer;
      // clearTimeout(timer);
      $this.addClass("show");
      $this.find("> a").attr("aria-expanded", true);
      // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").addClass("show");
    },
    function () {
      var $this = $(this);
      // timer;
      // timer = setTimeout(function(){
      $this.removeClass("show");
      $this.find("> a").attr("aria-expanded", false);
      // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").removeClass("show");
      // }, 100);
    }
  );

  $("#dropdown04").on("show.bs.dropdown", function () {
    console.log("show");
  });

  // scroll
  var scrollWindow = function () {
    $(window).scroll(function () {
      var $w = $(this),
        st = $w.scrollTop(),
        navbar = $(".ftco_navbar"),
        sd = $(".js-scroll-wrap");

      if (st > 150) {
        if (!navbar.hasClass("scrolled")) {
          navbar.addClass("scrolled");
        }
      }
      if (st < 150) {
        if (navbar.hasClass("scrolled")) {
          navbar.removeClass("scrolled sleep");
        }
      }
      if (st > 350) {
        if (!navbar.hasClass("awake")) {
          navbar.addClass("awake");
        }

        if (sd.length > 0) {
          sd.addClass("sleep");
        }
      }
      if (st < 350) {
        if (navbar.hasClass("awake")) {
          navbar.removeClass("awake");
          navbar.addClass("sleep");
        }
        if (sd.length > 0) {
          sd.removeClass("sleep");
        }
      }
    });
  };
  scrollWindow();

  var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    },
  };

  // navigation
  var OnePageNav = function () {
    $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on(
      "click",
      function (e) {
        e.preventDefault();

        var hash = this.hash,
          navToggler = $(".navbar-toggler");
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          700,
          "easeInOutExpo",
          function () {
            window.location.hash = hash;
          }
        );

        if (navToggler.is(":visible")) {
          navToggler.click();
        }
      }
    );
    $("body").on("activate.bs.scrollspy", function () {
      console.log("nice");
    });
  };
  OnePageNav();

  // START FAQ PAGE

  const items = document.querySelectorAll(".accordion a");

  function toggleAccordion() {
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("active");
  }

  items.forEach((item) => item.addEventListener("click", toggleAccordion));
  // END FAQ PAGE
  $(".fa-eye").click(function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(this).removeClass("fa-eye");
      $(this).addClass("fa-eye-slash");

      $(".passwordinput").attr("type", "text");
    } else {
      $(this).removeClass("fa-eye-slash");
      $(this).addClass("fa-eye");
      $(".passwordinput").attr("type", "password");
    }
  });

  if (window.location.href.includes("index")) {
    $("#index_page").addClass("active");
    $("#car_page").removeClass("active");
    $("#faq_page").removeClass("active");
    $("#contact_page").removeClass("active");
    $("#account_page").removeClass("active");
  } else if (window.location.href.includes("cars")) {
    $("#car_page").addClass("active");
    $("#index_page").removeClass("active");
    $("#faq_page").removeClass("active");
    $("#contact_page").removeClass("active");
    $("#account_page").removeClass("active");
  } else if (window.location.href.includes("faq")) {
    $("#faq_page").addClass("active");
    $("#index_page").removeClass("active");
    $("#car_page").removeClass("active");
    $("#contact_page").removeClass("active");
    $("#account_page").removeClass("active");
  } else if (window.location.href.includes("contact")) {
    $("#contact_page").addClass("active");
    $("#faq_page").removeClass("active");
    $("#index_page").removeClass("active");
    $("#car_page").removeClass("active");
    $("#account_page").removeClass("active");
  } else if (window.location.href.includes("login")) {
    $("#login_page").addClass("active");
    $("#contact_page").removeClass("active");
    $("#faq_page").removeClass("active");
    $("#index_page").removeClass("active");
    $("#car_page").removeClass("active");
    $("#account_page").removeClass("active");
  } else if (window.location.href.includes("account")) {
    $("#account_page").addClass("active");
    $("#login_page").removeClass("active");
    $("#contact_page").removeClass("active");
    $("#faq_page").removeClass("active");
    $("#index_page").removeClass("active");
    $("#car_page").removeClass("active");
  }
})(jQuery);
