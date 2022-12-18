@extends('layouts.app_ec')

@section('content')
<div class="header_margin" style="padding: 0px 200px;">
    <ul class="slider_ec">
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
        <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    </ul>
</div>

<div class="top_circle_list_div">
    <div class="top_circle_list">
        <a href="{{ route('ec.silhouette') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">今月の先行販売<br>アイテム</a>
        <a href="{{ route('ec.silhouette') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">新作ドレス</a>
        <a href="{{ route('ec.silhouette') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">ご予約</a>
        <a href="{{ route('ec.silhouette') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">シルエット</a>
        <a href="{{ route('ec.model') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">モデル</a>
        <a href="{{ route('ec.complex') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">コンプレックス</a>
        <a href="{{ route('ec.silhouette') }}" class="top_circle_a"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">ブランド</a>
    </div>
</div>

<div class="brand_rec_title">RECOMMEND</div>

<ul class="slider_brand">
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
</ul>
<a href="" class="more_btn_en">MORE</a>

<div class="top_title">NEW ARRIVAL</div>
<div class="fav_list_flex">
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
</div>

<div class="top_title">RANKING</div>
<div class="fav_list_flex">
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank7.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank8.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank9.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank10.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank11.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank12.png') }}" class="rank_img" alt="">
        <div class="rank_div1">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale">TIME SALE</div>
        </div>
    </div>
</div>



<div class="top_title">NEWS</div>
<div class="fav_list_flex">
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="brand_new_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
</div>
<a href="" class="more_btn_en">MORE</a>



<div class="cart_bar">
    <div class="right_title_en">BRAND</div>
    <div class="top_brand_list">
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'pandy']) }}"><img src="{{ asset('img/top_logo_pandy.jpg') }}" class="top_brand_img" alt="">PREMIUM Andy</a>
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'andy']) }}"><img src="{{ asset('img/top_logo_andy.jpg') }}" class="top_brand_img" alt="">Andy PREMIUM COLLECTION</a>
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'glamorous']) }}"><img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="top_brand_img" alt="">GLAMOROUS</a>
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'can']) }}"><img src="{{ asset('img/top_logo_can.jpg') }}" class="top_brand_img" alt="">couture an</a>
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'an']) }}"><img src="{{ asset('img/top_logo_an.jpg') }}" class="top_brand_img" alt="">an</a>
        <a class="top_brand_a" href="{{ route('brand.show', ['url' => 'aty']) }}"><img src="{{ asset('img/top_logo_aty.jpg') }}" class="top_brand_img" alt="">an to you</a>
    </div>


</div>




@endsection


@section('content_sp')

<ul class="slider_sp">
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
</ul>


<div class="top_circle_list_sp">
    <a href="{{ route('ec.silhouette') }}" class="top_circle_a_sp"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">今月の先行販売<br>アイテム</a>
    <a href="{{ route('ec.silhouette') }}" class="top_circle_a_sp"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">新作ドレス</a>
    <a href="{{ route('ec.silhouette') }}" class="top_circle_a_sp"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">ご予約</a>
    <a href="{{ route('ec.silhouette') }}" class="top_circle_a_sp"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">シルエット</a>
</div>

<div class="top_circle_list_sp" style="justify-content: space-around;">
    <a href="{{ route('ec.model') }}" class="top_circle_a_sp" style="margin-left: 30px;"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">モデル</a>
    <a href="{{ route('ec.complex') }}" class="top_circle_a_sp"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">コンプレックス</a>
    <a href="{{ route('ec.silhouette') }}" class="top_circle_a_sp" style="margin-right: 30px;"><img src="{{ asset('img/circle.png') }}" class="top_circle_img" alt="">ブランド</a>
</div>

<div class="brand_rec_title">RECOMMEND</div>

<ul class="slider_brand_sp">
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
</ul>
<a href="" class="more_btn_en">MORE</a>

<div class="top_title">NEW ARRIVAL</div>
<div class="ranking_list_flex_sp">
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale_sp">TIME SALE</div>
    </div>
</div>


<div class="top_title">RANKING</div>
<div class="ranking_list_flex_sp">
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank1.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank2.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank3.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank4.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank5.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
    <div class="ranking_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <img src="{{ asset('img/rank6.png') }}" class="rank_img_sp" alt="">
        <div class="rank_div2">
            <div class="fav_item_name">Andy</div>
            <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
            <div class="fav_item_text">￥12,100</div>
            <div class="time_sale_sp">TIME SALE</div>
        </div>
    </div>
</div>

<div class="top_title">NEWS</div>
<div class="ranking_list_flex_sp">
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
    <div class="search_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="brand_news_date">2022.08.20</div>
        <div class="brand_news_title">【INSTA LIVE】8/20(土)<br>19:30～／2022年"秋の新作ご紹介"</div>
    </div>
</div>
<a href="" class="more_btn_en">MORE</a>



<div class="cart_bar" style="width: 100%;">
    <div class="right_title_en">BRAND</div>
    <div class="top_brand_list">
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'pandy']) }}"><img src="{{ asset('img/top_logo_pandy.jpg') }}" class="top_brand_img" alt="">PREMIUM Andy</a>
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'andy']) }}"><img src="{{ asset('img/top_logo_andy.jpg') }}" class="top_brand_img" alt="">Andy PREMIUM COLLECTION</a>
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'glamorous']) }}"><img src="{{ asset('img/top_logo_glamorous.jpg') }}" class="top_brand_img" alt="">GLAMOROUS</a>
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'can']) }}"><img src="{{ asset('img/top_logo_can.jpg') }}" class="top_brand_img" alt="">couture an</a>
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'an']) }}"><img src="{{ asset('img/top_logo_an.jpg') }}" class="top_brand_img" alt="">an</a>
        <a class="top_brand_a_sp" href="{{ route('brand.show', ['url' => 'aty']) }}"><img src="{{ asset('img/top_logo_aty.jpg') }}" class="top_brand_img" alt="">an to you</a>
    </div>


</div>

@endsection