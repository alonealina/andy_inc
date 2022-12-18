scroll = 0;

window.onmousewheel = function(){
    var header = $('.fw_header');

    scroll = scroll - event.wheelDelta;
    if (scroll < 0) { scroll = 0}
	console.log(scroll);

    if (scroll > 0) {
        header.css('top', '-150px');
    } else {
        header.css('top', '0px');
    }
    
}