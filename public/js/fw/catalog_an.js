scroll = 0;

window.onmousewheel = function(){
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    
    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
    else if (scroll > 8000 - inner_width) { scroll = 8000 - inner_width};
	console.log(scroll);

    if (scroll < 1380) {
        page_no.html("01");
        header_border.css('width', '20%');
    } else if (scroll < 2400) {
        page_no.html("02");
        header_border.css('width', '40%');
    } else if (scroll < 3800) {
        page_no.html("03");
        header_border.css('width', '60%');
    } else if (scroll < 5200) {
        page_no.html("04");
        header_border.css('width', '80%');
    } else {
        page_no.html("<a href='./catalog_andy' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}