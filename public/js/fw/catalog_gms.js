scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max;
    if (inner_width < 1500) {
        max = 1280 * 3.7 - inner_width;
    } else if (inner_width < 2301) {
        max = 1920 * 3.7 - inner_width;
    } else {
        max = 2400 * 3.7 - inner_width;
    }

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > max) { scroll = max};
	console.log(scroll);
    width_per = new Intl.NumberFormat('ja', { style: 'percent'}).format(scroll / max)
	console.log(width_per);

    if (scroll < max) {
        page_no.html("");
        header_border.css('width', width_per);
    } else {
        page_no.html("<a href='./catalog_an' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}