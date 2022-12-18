scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max = 3600 - inner_width;

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > max) { scroll = max};
	console.log(scroll);

    if (scroll < max / 2) {
        page_no.html("01");
        header_border.css('width', '50%');
    } else {
        page_no.html("<a href='./zara' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}