scroll = 0;

window.onscroll = function(){
    console.log("aaa")
    let inner_width = window.innerWidth;
    var page_no = $('.header_page_number');
    var header_border = $('.header_border');
    var max = inner_width * 6;

    if (navigator.userAgent.toLowerCase().match(/webkit|msie 5/)) {
        // Webkit系（Safari, Chrome, iOS）、IE5はbody要素
        documentElement = document.body;
    } else {
        // IE（6以上）、Firefox、Operaはhtml要素
        documentElement = document.documentElement;
    }

    scroll = window.scrollX;

	console.log(scroll);

    if (scroll < max / 6) {
        page_no.html("01");
        header_border.css('width', '16%');
    } else if (scroll < max / 6 * 2) {
        page_no.html("02");
        header_border.css('width', '33%');
    } else if (scroll < max / 6 * 3) {
        page_no.html("03");
        header_border.css('width', '50%');
    } else if (scroll < max / 6 * 4) {
        page_no.html("04");
        header_border.css('width', '66%');
    } else if (scroll < max / 6 * 5) {
        page_no.html("05");
        header_border.css('width', '83%');
    } else {
        page_no.html("<a href='./enrike' class='header_next_a'>Next</a>");
        header_border.css('width', '100%');
    }
    
}