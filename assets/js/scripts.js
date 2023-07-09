/***************************************************
==================== JS INDEX ======================
****************************************************
01. Preloader
02. Close Top Bar
03. Sticky Menu
04. Type JS
05. Hero Slider One
06. Hero Slider Three
07. About Us Counter
08. Counter Two
09. Service Slider 1
10. Testimonial Slider 1
11. Testimonial Slider 2
12. Portfolio Slider 1
13. Case Study Slider 2
14. Case Study Slider 3
15. Mouse Animation for all pages
16. Mouse Animation for Portfolio Slider 1
17. Mouse Animation for Case Study Slider 2
18. Mouse Animation for Case Study Slider 3
19. Mouse Animation Team Slider 2
20. Video Modal
21. About Us Animation
22. About Us Animation 3
23. Scroll Animation for About Thumb 2
24. Core Feature Images Animation
25. Scroll Animation for About Thumb 4
26. Animation for Workflow Thumb
27. WOW JS
28. Side Navbar
29. Button Hover
30. Offcanvas Toggle
31. Progress Bar


****************************************************/

(function ($) {
  "use strict";

  /////////////////////////////////////////////////////
  // 01. Preloader
  var preloader = document.querySelector(".preloader");
  var body = document.querySelector("body");

  body.onload = function () {
    preloader.style.display = "none";
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 02. Close Top Bar
  var top_bar = document.querySelector('.header__top');
  if (top_bar) {
    document.querySelector('.close-topbar').addEventListener('click', function () {
      top_bar.style.display = "none";
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 03. Sticky Menu
  var controller = new ScrollMagic.Controller();
  var sticky = new ScrollMagic.Scene({
    triggerElement: '#header_menu',
    triggerHook: 0,
  })
    .setPin('#header_menu', {
      pushFollowers: false
    })
    .setClassToggle('#header_menu', 'sticky')
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 04. Type JS
  var type_list = document.querySelector('#typed_lists');

  if (type_list) {
    var typed = new Typed('#typed', {
      stringsElement: '#typed_lists',
      typeSpeed: 50,
      backSpeed: 50,
      cursorChar: '_',
      loop: true
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 05. Hero Slider One
  var hero_slider = new Swiper(".hero__slider.swiper", {
    loop: true,
    speed: 2500,
    freeModeMomentum: false,
    effect: 'fade',
    autoplay: {
      dealy: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 06. Hero Slider Three
  var hero_slider_3 = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  var hero_slider_3_thumb = new Swiper(".mySwiper2", {
    loop: true,
    freeMode: true,
    spaceBetween: 0,
    speed: 2500,
    autoplay: {
      delay: 2500,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    thumbs: {
      swiper: hero_slider_3,
    },

    grabCursor: true,
    effect: "fade",
  });
  ///////////////////////////////////////////////////


  ///////////////////////////////////////////////////
  // 07. About Us Counter
  const about_counter = window.counterUp.default
  const about_cb = entries => {

    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        about_counter(el, {
          duration: 1500,
          delay: 16,
        })
        el.classList.add('is-visible')
      }
    })
  }

  const IO = new IntersectionObserver(about_cb, {
    threshold: 1
  })

  const els = document.querySelectorAll('.about__number');
  els.forEach((el) => {
    IO.observe(el)
  });
  ///////////////////////////////////////////////////


  ///////////////////////////////////////////////////
  // 08. Counter Two
  const counter_1 = window.counterUp.default
  const counter_cb = entries => {

    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        counter_1(el, {
          duration: 1500,
          delay: 16,
        })
        el.classList.add('is-visible')
      }
    })
  }

  const counter_1_io = new IntersectionObserver(counter_cb, {
    threshold: 1
  })

  const counter_1_els = document.querySelectorAll('.counter__number');
  counter_1_els.forEach((el) => {
    counter_1_io.observe(el)
  });
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 09. Service Slider 1
  var service_slider = new Swiper(".service__slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 1000,
    navigation: {
      nextEl: ".service__btn-next",
      prevEl: ".service__btn-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 10. Testimonial Slider 1
  var testi_slider = new Swiper(".testimonial__slider", {
    slidesPerView: 1,
    spaceBetween: 80,
    loop: true,
    freeMode: true,
    speed: 800,
    freeModeMomentum: false,
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 11. Testimonial Slider 2
  var testi_slider_2 = new Swiper(".testimonial__slider-2", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    speed: 1000,
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });
  ///////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  // 12. Testimonial Slider 4
  var testi_slider_4 = new Swiper(".testimonial__slider-4", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    speed: 1000,
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });
  ///////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  // 13. Portfolio Slider 1

  var portfolio_slider_info = new Swiper(".portfolio__slider-thumbs", {
    loop: true,
    slidesPerView: 1,
    freeMode: true,
    watchSlidesProgress: true,
    speed: 1500,
    effect: "flip",
    grabCursor: true,
  });

  var portfolio_slider = new Swiper(".portfolio__slider", {
    slidesPerView: "auto",
    spaceBetween: 70,
    loop: true,
    speed: 2500,
    freeMode: true,
    thumbs: {
      swiper: portfolio_slider_info
    },
  });
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 14. Case Study Slider 2
  var cs_slider_2 = new Swiper(".case-study__slider-2", {
    freeMode: true,
    slidesPerView: 4,
    spaceBetween: 65,
    loop: true,
    speed: 2500,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1365: {
        slidesPerView: 2,
      }
    }
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 15. Case Study Slider 3
  var cs_slider_3 = new Swiper(".swiper.case-study__slider-3", {
    slidesPerView: 3,
    spaceBetween: 70,
    speed: 2000,
    freeMode: true,
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1365: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    }
  });
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 16. Project Slider 4
  var project_slider_4 = new Swiper(".swiper.project__slider-4", {
    slidesPerView: 3,
    spaceBetween: 70,
    speed: 2000,
    // freeMode: true,
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1366: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1400: {
        slidesPerView: 3,
        spaceBetween: 70,
      }
    }
  });
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 17. Mouse Animation for all pages
  var cursor1 = document.querySelector(".cursor1");
  var cursor2 = document.querySelector(".cursor2");

  document.addEventListener("mousemove", function (e) {
    cursor1.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 18. Mouse Animation for Portfolio Slider 1
  var p_cursor = document.getElementById("portfolio_cursor");
  var portfolio = document.querySelector(".portfolio__slider");
  var i;

  if (portfolio) {
    portfolio.addEventListener("mousemove", (e) => {
      let x = e.clientX;
      let y = e.clientY;
      p_cursor.style.top = y + "px";
      p_cursor.style.left = x + "px";
      p_cursor.style.transform = "translate(-50%, -50%) scale(1)";
    });

    portfolio.addEventListener("mouseout", (e) => {
      p_cursor.style.transform = "translate(-50%, -50%) scale(0)";
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 19. Mouse Animation for Case Study Slider 2
  var p_cursor2 = document.getElementById("portfolio_cursor2");
  var portfolio2 = document.querySelectorAll(".case-study__slide-2 img");

  if (portfolio2) {
    for (var i = 0; i < portfolio2.length; i++) {
      portfolio2[i].addEventListener("mousemove", (e) => {
        let x = e.clientX;
        let y = e.clientY;
        p_cursor2.style.top = y + "px";
        p_cursor2.style.left = x + "px";
        p_cursor2.style.transform = "translate(-50%, -50%) scale(1)";
      });


      portfolio2[i].addEventListener("mouseout", (e) => {
        p_cursor2.style.transform = "translate(-50%, -50%) scale(0)";
      });
    }
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 20. Mouse Animation for Case Study Slider 3
  var p_cursor3 = document.getElementById("portfolio_cursor3");
  var portfolio3 = document.querySelectorAll(".case-study__slide-3 img");

  if (portfolio3) {
    for (var i = 0; i < portfolio3.length; i++) {
      portfolio3[i].addEventListener("mousemove", (e) => {
        let x = e.clientX;
        let y = e.clientY;
        p_cursor3.style.top = y + "px";
        p_cursor3.style.left = x + "px";
        p_cursor3.style.transform = "translate(-50%, -50%) scale(1)";
      });


      portfolio3[i].addEventListener("mouseout", (e) => {
        p_cursor3.style.transform = "translate(-50%, -50%) scale(0)";
      });
    }
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 21. Mouse Animation Team Slider 2
  var team_cursor = document.getElementById("team_cursor");
  var team_img = document.querySelectorAll(".team__img-2 img");

  if (team_img) {
    for (var i = 0; i < team_img.length; i++) {
      team_img[i].addEventListener("mousemove", (e) => {
        let x = e.clientX;
        let y = e.clientY;
        team_cursor.style.top = y + "px";
        team_cursor.style.left = x + "px";
        team_cursor.style.transform = "translate(-50%, -50%) scale(1)";
      });


      team_img[i].addEventListener("mouseout", (e) => {
        team_cursor.style.transform = "translate(-50%, -50%) scale(0)";
      });
    }
  }
  /////////////////////////////////////////////////////
  // 22. Video Modal
  var v_cursor = document.getElementById("video_cursor");
  var video_icon = document.querySelector(".video__area button");

  if (video_icon) {
    video_icon.addEventListener("mousemove", (e) => {
      let x = e.clientX;
      let y = e.clientY;
      v_cursor.style.top = y + "px";
      v_cursor.style.left = x + "px";
      v_cursor.style.transform = "translate(-50%, -50%) scale(1)";
    });

    video_icon.addEventListener("mouseout", (e) => {
      v_cursor.style.transform = "translate(-50%, -50%) scale(0)";
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 23. About Us Animation
  var about_thumb = new ScrollMagic.Scene({
    triggerElement: '.about__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.about__thumb', 1, {
      y: '-50px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 24. About Us Animation 3
  var about_thumb_3 = new ScrollMagic.Scene({
    triggerElement: '.about__area-3',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.about__thumb-3', 1, {
      y: '-50px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);
  ///////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 25. Scroll Animation for About Thumb 2
  var about_img = new ScrollMagic.Scene({
    triggerElement: '.about__area-2',
    triggerHook: 1,
    duration: '70%',
  })
    .setTween(TweenMax.from('.about__thumb-2 img', 1, {
      width: '80.45%',
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var about_play = new ScrollMagic.Scene({
    triggerElement: '.about__area-2',
    triggerHook: 1,
    duration: '70%',
  })
    .setTween(TweenMax.from('#about_play', 1, {
      opacity: '0',
      ease: Power0.easeNone
    }))
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 26. Core Feature Images Animation
  var core_img1 = new ScrollMagic.Scene({
    triggerElement: '.feature__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.feature__img-1', 1, {
      transform: `translateY(40px)`,
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var core_img2 = new ScrollMagic.Scene({
    triggerElement: '.feature__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.feature__img-2', 1, {
      transform: `translateY(0px)`,
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var core_img3 = new ScrollMagic.Scene({
    triggerElement: '.feature__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.feature__img-3', 1, {
      transform: `translateY(90px)`,
      ease: Power0.easeNone
    }))
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 27. Scroll Animation for About Thumb 4
  var about_img4_1 = new ScrollMagic.Scene({
    triggerElement: '.about__area-4',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.about__img4-1', 1, {
      y: '-30px',
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var about_img4_2 = new ScrollMagic.Scene({
    triggerElement: '.feature__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.about__img4-2', 1, {
      y: '50px',
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var about_img4_3 = new ScrollMagic.Scene({
    triggerElement: '.feature__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.about__img4-3', 1, {
      y: '-70px',
      ease: Power0.easeNone
    }))
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 28. Animation for Workflow Thumb
  var wf_img = new ScrollMagic.Scene({
    triggerElement: '.workflow__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.workflow__thumb', 1, {
      transform: `translateY(15%)`,
      ease: Power0.easeNone
    }))
    .addTo(controller);

  var wf_img2 = new ScrollMagic.Scene({
    triggerElement: '.workflow__area',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.workflow__thumb-2', 1, {
      transform: `translateY(40%)`,
      ease: Power0.easeNone
    }))
    .addTo(controller);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 29. WOW JS
  var wow = new WOW({
    mobile: true,
  });
  wow.init();
  /////////////////////////////////////////////////////



  // jQuery Codes
  jQuery(document).ready(function () {

    /////////////////////////////////////////////////////
    // 30. Side Navbar
    $('.side__navbar').meanmenu({
      meanScreenWidth: "5000",
      meanMenuContainer: '.side__navbar-wrapper',
      meanMenuCloseSize: '36px',
    });
    /////////////////////////////////////////////////////


    /////////////////////////////////////////////////////
    // 31. Button Hover
    $('.btn-hover').on('mouseenter', function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find('span').css({
        top: y,
        left: x
      });
    });

    $('.btn-hover').on('mouseout', function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find('span').css({
        top: y,
        left: x
      });
    });
    /////////////////////////////////////////////////////
    // 32. Offcanvas Toggle
    $("#open_offcanvas").click(function () {
      // $('body').css('overflow', 'hidden');
      $('.offcanvas__area').css('transform', 'perspective(300px) rotateY(0deg)');
      $('.offcanvas__area').css('opacity', '1');
      $('.offcanvas__area').css('visibility', 'visible');
    });
    $("#close_offcanvas").click(function () {
      $('body').css('overflow', 'visible');
      $('.offcanvas__area').css('transform', 'perspective(300px) rotateY(18deg)');
      $('.offcanvas__area').css('opacity', '0');
      $('.offcanvas__area').css('visibility', 'hidden');
    });
    /////////////////////////////////////////////////////


    /////////////////////////////////////////////////////
    // 33. Progress Bar
    $('.progress__label').progressBar({
      percentage: true,
      animation: true,
      height: "2",
      barColor: "#FF6F06",
      shadow: true,
    });
    ///////////////////////////////////////////////////
  });





  // Home 4 JS start from here............
  //
  /////////////////////////////////////////////////////
  // 34. Mouse Animation for Case Study Slider 2
  var p_cursor4 = document.getElementById("project_cursor-4");
  var project_4 = document.querySelectorAll(".project-slide-4 img");

  if (project_4) {
    for (var i = 0; i < project_4.length; i++) {
      project_4[i].addEventListener("mousemove", (e) => {
        let x = e.clientX;
        let y = e.clientY;
        p_cursor4.style.top = y + "px";
        p_cursor4.style.left = x + "px";
        p_cursor4.style.transform = "translate(-50%, -50%) scale(1)";
      });


      project_4[i].addEventListener("mouseout", (e) => {
        p_cursor4.style.transform = "translate(-50%, -50%) scale(0)";
      });
    }
  }
  /////////////////////////////////////////////////////



  /////////////////////////////////////////////////////
  // 35. Sticky Menu 4
  var header_4 = document.querySelector(".header__area-4");

  if (header_4) {
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        header_4.style.borderBottom = '1px solid #ddd';
      } else {
        header_4.style.borderBottom = '0px solid #ddd';
      }
    }
  }
  /////////////////////////////////////////////////////


  // hero 4 text animation
  var controller = new ScrollMagic.Controller();
  var about_thumb_test = new ScrollMagic.Scene({
    triggerElement: '.hero__area-4',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.hero__content4-1', 1, {
      x: '-60px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);

  var about_thumb_test = new ScrollMagic.Scene({
    triggerElement: '.hero__content4-wrapper',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.hero__content4-2', 1, {
      x: '150px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);

  var about_thumb_test = new ScrollMagic.Scene({
    triggerElement: '.hero__content4-wrapper',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.hero__content4-3', 1, {
      x: '-200px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);

  var about_thumb_test = new ScrollMagic.Scene({
    triggerElement: '.hero__content4-wrapper',
    triggerHook: 1,
    duration: '200%',
  })
    .setTween(TweenMax.from('.hero__content4-4', 1, {
      x: '150px',
      ease: Power0.easeNone,
    }))
    .addTo(controller);


  // Projects Image Animation
  var links = document.querySelectorAll('.project__latest-item');

  if (links) {
    links.forEach((link) => {
      link.addEventListener('mousemove', (e) => {
        link.children[0].style.mixBlendMode = 'difference';
        link.children[1].style.opacity = 1;

        var x = e.clientX - 450 + 'px';
        var y = e.clientY / 2;

        link.children[1].style.left = x;
        link.children[1].style.top = y + 'px';
      });

      link.addEventListener('mouseleave', (e) => {
        link.children[0].style.mixBlendMode = 'unset';
        link.children[1].style.opacity = 0;
      });
    });
  }




})(jQuery);
