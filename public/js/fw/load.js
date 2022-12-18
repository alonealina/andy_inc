$(function(){
	var loader = $('.loader-wrap');

	//ページの読み込みが完了したらアニメーションを非表示
	$(window).on('load',function(){
		loader.fadeOut();
	});

	//ページの読み込みが完了してなくても10秒後にアニメーションを非表示にする
    //一旦1秒に設定
	setTimeout(function(){
		loader.fadeOut();
	},1000);
});
