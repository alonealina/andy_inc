scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max = 4900 - inner_width;

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > max) { scroll = max};
	console.log(scroll);

    if (scroll < max / 3) {
        page_no.html("01");
        header_border.css('width', '33%');
    } else if (scroll < max / 3 * 2) {
        page_no.html("02");
        header_border.css('width', '66%');
    } else {
        page_no.html("<a href='./cover_girl' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}