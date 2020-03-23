$(document).ready(function() {
  new WOW().init();

  (function() {
    var current = 0;
    var length = $(".products-list > .products-list__item").length;
    $("#product-next").on("click", function() {
      if (current + 1 > length - 1) return;
      $(".products-list > .products-list__item")
        .eq(current)
        .fadeOut(500, function() {
          current++;
          $(".products-list > .products-list__item")
            .eq(current)
            .fadeIn(500);
        });
      console.log(current);
    });
    $("#product-prev").on("click", function() {
      if (current - 1 < 0) return;
      $(".products-list > .products-list__item")
        .eq(current)
        .fadeOut(500, function() {
          current--;
          $(".products-list > .products-list__item")
            .eq(current)
            .fadeIn(500);
        });
      console.log(current);
    });
  })();

  /* 
    Слайдеры
  */
  (function() {
    new Swiper("#slider-objects", {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      navigation: {
        nextEl: "#slider-object-next",
        prevEl: "#slider-object-prev"
      },
      breakpoints: {
        576: {
          slidesPerView: 3
        }
      }
    });

    new Swiper("#slider-forms", {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      navigation: {
        nextEl: "#slider-forms-next",
        prevEl: "#slider-forms-prev"
      },
      breakpoints: {
        576: {
          slidesPerView: 3
        }
      }
    });

    new Swiper("#slider-types", {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      navigation: {
        nextEl: "#slider-types-next",
        prevEl: "#slider-types-prev"
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        }
      }
    });
  })();

  /* 
        Кнопка "Вверх"
    */
  (function() {
    function ifScrollUp() {
      if ($(this).scrollTop() > 250) {
        $(".pageup")
          .fadeIn()
          .css("display", "flex");
      } else {
        $(".pageup").fadeOut();
      }
    }
    $(window).scroll(ifScrollUp);
    ifScrollUp();
    $(".pageup").on("click", function(e) {
      $([document.documentElement, document.body]).animate(
        {
          scrollTop: 0
        },
        1100
      );
    });
  })();
});
