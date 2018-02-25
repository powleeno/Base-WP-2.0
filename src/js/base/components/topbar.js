function topbar_scroll(identifier, threshold) {
  var element = $(identifier);
  if (element.length > 0) {
    element.each(function () {

      $(document).scroll(function() {
        if ($(this).scrollTop() >= threshold) {
          element.addClass('scrolled');
        } else {
          element.removeClass('scrolled');
        }
      });

    });
  }
}
