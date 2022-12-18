scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max = 14500 - inner_width;

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > max) { scroll = max};
	console.log(scroll);

    if (scroll < max / 7) {
        page_no.html("01");
        header_border.css('width', '14%');
    } else if (scroll < max / 7 * 2) {
        page_no.html("02");
        header_border.css('width', '28%');
    } else if (scroll < max / 7 * 3) {
        page_no.html("03");
        header_border.css('width', '42%');
    } else if (scroll < max / 7 * 4) {
        page_no.html("04");
        header_border.css('width', '56%');
    } else if (scroll < max / 7 * 5) {
        page_no.html("05");
        header_border.css('width', '70%');
    } else if (scroll < max / 7 * 6) {
        page_no.html("06");
        header_border.css('width', '85%');
    } else {
        page_no.html("<a href='./new_dress' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}