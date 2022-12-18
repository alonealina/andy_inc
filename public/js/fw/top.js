function clickReadNowButton() {
    var top_logo_a = $('.top_logo_a');
    var top_read_now_a = $('.top_read_now_a');
    var top_fixed = $('.top_fixed');
    var menu = $('.menu-content_top');
    top_logo_a.css('opacity', '0');
    top_logo_a.css('z-index', '0');
    top_logo_a.css('pointer-events', 'none');
    top_read_now_a.css('opacity', '0');
    top_read_now_a.css('z-index', '0');
    top_read_now_a.css('pointer-events', 'none');
    top_fixed.css('opacity', '0');
    top_fixed.css('z-index', '0');
    top_fixed.css('pointer-events', 'none');
    menu.css('opacity', '1');
    menu.css('z-index', '10');
    menu.css('pointer-events', 'auto');
}