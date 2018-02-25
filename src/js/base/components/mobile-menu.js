function mobile_menu_button() {
  var element = $('.hamburger');
  if (element.length > 0) {
    element.each(function () {

      $(this).click(function() {
        if($(this).hasClass('is-active')) {
          $(this).removeClass('is-active');
          close_mobile_nav();
        } else {
          $(this).addClass('is-active');
          open_mobile_nav();
        }
      });

    });
  }
}

function open_mobile_nav() {
  var element = $('.mobile-menu');
  if (element.length > 0) {
    element.each(function () {
      $(this).addClass('is-active');
    });
  }
}

function close_mobile_nav() {
  var element = $('.mobile-menu');
  if (element.length > 0) {
    element.each(function () {
      $(this).removeClass('is-active');
    });
  }
}
