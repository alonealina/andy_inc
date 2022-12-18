$(document).ready(function () {
    var hSize = $(window).height();
    $('.sp_img').height(hSize * 1.03); // アドレスバーを除いたサイズを付与
});
$(window).resize(function () { // ページをリサイズした時の処理
    var hSize = $(window).height();
    $('.sp_img').height(hSize * 1.03); // アドレスバーを除いたサイズを付与
});