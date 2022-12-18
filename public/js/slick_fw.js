const slider = $(".slider-item");

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    $('.slider_fw').slick('slickPrev');
  } else {
    $('.slider_fw').slick('slickNext');
  }
}));