const card = ($) => {
  Drupal.behaviors.card = {
    attach(context) {
      const $context = $(context);
      $context.find(".testimonial-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: true,
      });
    },
  };
};
card(jQuery);
// portfolio-slider 
const image = ($) => {
  Drupal.behaviors.image = {
    attach(context) {
      const $context = $(context);
      $context.find(".portfolio-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: true,
      });
    },
  };
};
image(jQuery);