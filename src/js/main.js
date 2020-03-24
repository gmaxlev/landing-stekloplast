$(document).ready(function() {
  new WOW().init({
    live: false
  });

  $("[data-modal]").on("click", function(e) {
    e.preventDefault();
    var id = $(this).attr("data-modal");
    $("#" + id).fadeIn();
  });

  $(".modal__dark").on("click", function(e) {
    e.preventDefault();
    $(this)
      .parent()
      .fadeOut();
  });

  /**
   * Маска для номера телефона
   */
  $(".phone-input").mask("+38 (000) 000 00 00", {
    placeholder: "+38 (___) ___ __ __"
  });

  (function() {
    var animate = false;
    $(".product-nav button").on("click", function() {
      var currentIndex;
      if (animate) return;
      if (
        !$(this)
          .closest(".countries__item")
          .find(".products-list__item_current").length
      ) {
        currentIndex = 0;
      } else {
        currentIndex = $(this)
          .closest(".countries__item")
          .find(".products-list__item_current")
          .index();
      }
      var newId;
      if ($(this).is("#product-next")) {
        newId = currentIndex + 1;
      } else {
        newId = currentIndex - 1;
      }
      var lengthItems = $(this)
        .closest(".countries__item")
        .find(".products-list__item").length;
      if (newId < 0 || newId > lengthItems - 1) return;
      console.log(currentIndex);
      animate = true;
      $(this)
        .closest(".countries__item")
        .find(".products-list__item")
        .eq(currentIndex)
        .removeClass("products-list__item_current")
        .fadeOut(500, function() {
          $(this)
            .closest(".countries__item")
            .find(".products-list__item")
            .eq(newId)
            .addClass("products-list__item_current")
            .fadeIn();
          animate = false;
        });
    });
  })();

  (function() {
    var current = 0;
    var animate = false;
    var country = 0;
    $("[data-prodtype]").on("click", function(e) {
      e.preventDefault();
      if (animate) return;
      var index = $(this).index();
      if (index == current) return;
      animate = true;
      $("#allproducts").show();
      $("html, body").animate(
        {
          scrollTop: $("#allproducts").offset().top
        },
        2000
      );
      $(this)
        .parent()
        .find(".button_d_active")
        .removeClass("button_d_active");
      $(this).addClass("button_d_active");

      $(".prodlist__item")
        .eq(current)
        .fadeOut(function() {
          $(".prodlist__item")
            .eq(index)
            .fadeIn();
          current = index;
          animate = false;
        });
    });
    $("#countries-list > button").on("click", function(e) {
      e.preventDefault();
      if (animate) return;
      var index = $(this).index();
      if (index == country) return;
      $("#allproducts").show();
      $("html, body").animate(
        {
          scrollTop: $("#allproducts").offset().top
        },
        2000
      );
      $(this)
        .parent()
        .find("button")
        .eq(country)
        .removeClass("button_b")
        .addClass("button_c");
      $(this)
        .parent()
        .find("button")
        .eq(index)
        .removeClass("button_c")
        .addClass("button_b");
      animate = true;
      $(".prodlist__item").each(function() {
        var that = this;
        $(that)
          .find(".countries__item")
          .eq(country)
          .fadeOut(500, function() {
            $(that)
              .find(".countries__item")
              .eq(index)
              .fadeIn();
            animate = false;
          });
      });
      country = index;
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

    new Swiper("#article-images-slider", {
      loop: true,
      slidesPerView: 1,
      navigation: {
        nextEl: "#article-images-slider-next",
        prevEl: "#article-images-slider-prev"
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

  (function() {
    $("#article-image-nav > button").on("click", function() {
      var animate = false;
      var current = $(".artimage-slides")
        .find(".artimage-slides__current")
        .index();
      var all = $(".artimage-slides").find("img").length;
      var newId;
      if ($(this).is("#article-slides-prev")) {
        newId = current - 1;
      } else {
        newId = current + 1;
      }

      if (newId > all - 1 || newId < 0) return;
      animate = true;
      $(".artimage-slides")
        .find("img")
        .eq(current)
        .removeClass("artimage-slides__current")
        .fadeOut(200, function() {
          $(".artimage-slides")
            .find("img")
            .eq(newId)
            .addClass("artimage-slides__current")
            .fadeIn(200);
          animate = false;
        });
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

  /* 
  Обработчик ошибок
*/
  function showError(error, element) {
    if (
      $(element)
        .parent()
        .find(".valerror").length !== 0
    )
      return false;
    if ($(element).attr("name") == "name") {
      message = "Введите имя";
    } else if ($(element).attr("name") == "phone") {
      message = "Введите номер телефона";
    }
    $(element)
      .parent()
      .prepend("<div class='valerror'>" + message + "</div>");
    return true;
  }

  (function() {
    /* 
      Окно "Подобрать тур"
    */

    $(".modal-form-simple").each(function() {
      $(this)
        .submit(function(e) {
          e.preventDefault();
        })
        .validate({
          rules: {
            name: {
              required: {
                depends: function() {
                  $(this).val($.trim($(this).val()));
                  return true;
                }
              }
            },
            phone: {
              required: {
                depends: function() {
                  $(this).val($.trim($(this).val()));
                  return true;
                }
              },
              minlength: 10
            }
          },

          success: function(label, element) {
            $(element)
              .parent()
              .find(".valerror")
              .remove();
            return true;
          },
          errorPlacement: showError,
          submitHandler: function(form) {
            $.ajax({
              url: "send.php",
              type: "POST",
              data: {
                form: $(form).attr("name"),
                name: $(form)
                  .find('input[name ="name"]')
                  .val(),
                phone: $(form)
                  .find('input[name ="phone"]')
                  .val()
              },
              success: function() {
                $(form)
                  .siblings(".formcomplete_ok")
                  .slideDown(500);
                $(form)
                  .find(".input-text, .textarea")
                  .prop("disabled", true)
                  .val("");
                $(form)
                  .find(".button")
                  .prop("disabled", true);
                setTimeout(function() {
                  $(form)
                    .closest(".modal")
                    .fadeOut();
                }, 4000);
              },
              error: function() {
                $(form)
                  .siblings(".formcomplete_error")
                  .slideDown(500);
              }
            });
          }
        });
    });
  })();
});
