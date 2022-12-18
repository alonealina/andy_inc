scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max = inner_width * 3.5;

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > max) { scroll = max};
	console.log(scroll);

    if (scroll < max / 4) {
        page_no.html("01");
        header_border.css('width', '25%');
    } else if (scroll < max / 4 * 2) {
        page_no.html("02");
        header_border.css('width', '50%');
    } else if (scroll < max / 4 * 3) {
        page_no.html("03");
        header_border.css('width', '75%');
    } else {
        page_no.html("<a href='./dress_restaurant' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}