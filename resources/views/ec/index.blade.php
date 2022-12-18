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
    </div>
</div>

<div class="top_title">ピックアップ特集・アイテム</div>

<ul class="slider_pickup">
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
    <li class=""><img src="{{ asset('img/slider_sample.png') }}" class="top_img1" alt=""></li>
</ul>

<div class="fav_list_flex">
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
    <div class="pickup_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
        <div class="time_sale">TIME SALE</div>
    </div>
</div>

<div class="top_title">人気アイテムランキング</div>
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



<div class="cart_flex">
    <div class="flex_page_left">
        <div class="search_left_title">SHOPPING</div>
        <input class="filter_freeword_mini" placeholder="" name="freeword" type="text">
        <button class="search_btn_mini"><img src="{{ asset('img/search.png') }}" class="" alt="" style="width: 55%;"></button>

        <div class="search_left_title">SEARCH</div>
        <a href="" class="ranking_left_a">新着アイテムから探す</a>
        <a href="" class="ranking_left_a">セールアイテムから探す</a>
        <a href="" class="ranking_left_a">ブランドから探す</a>
        <a href="" class="ranking_left_a">ランキングから探す</a>
        <a href="" class="ranking_left_a">コーディネートから探す</a>
        <a href="" class="ranking_left_a">店舗から探す</a>

        <div class="search_left_title">TREND CATEGORY</div>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">ミニドレス</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">ミディアム・ロングドレス</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">ブラウス</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">スカート＆パンツ</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">セットアップ</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">アウター</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">シューズ</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">バッグ</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">ピアス</a>
        <a href="" class="top_trend_a"><img src="{{ asset('img/circle.png') }}" class="search_circle_img" alt="">その他</a>

        <div class="search_left_title">BRAND</div>
        <a href="" class="ranking_left_a">Andy</a>
        <a href="" class="ranking_left_a">PREMIUM Andy</a>
        <a href="" class="ranking_left_a">GLAMOROUS</a>
        <a href="" class="ranking_left_a">an</a>
        <a href="" class="ranking_left_a">couture an</a>
        <a href="" class="ranking_left_a">an to you</a>
    </div>

    <div class="flex_page_right">
        <div class="right_title_en">INFORMATION</div>
        <div class="top_info_div">2022.08.10　<a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>
        <div class="top_info_div">2022.08.10　<a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>
        <div class="top_info_div">2022.08.10　<a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>

        <div class="right_title_en">TOPICS</div>
        <div class="topics_dummy"></div>

        <div class="right_title_ja">あなたにオススメのアイテム</div>
        <div class="top_item_list_flex">
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
        </div>
        <a href="{{ route('ec.recommend') }}" class="top_more_btn">もっと見る</a>

        <div class="right_title_ja">新着アイテム</div>
        <div class="top_item_list_flex">
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
            <div class="top_item_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
            </div>
        </div>
        <a href="{{ route('ec.new_arrival') }}" class="top_more_btn">もっと見る</a>

        <div class="right_title_en">SCENE・NEEDS</div>
        <div class="topics_dummy"></div>
        <a href="" class="top_more_btn">もっと見る</a>

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
</div>




@endsection


@section('content_sp')
<div class="top1_sp">
    <div class="top_main_sp">ピックアップ特集・アイテム</div>
    <div class="top_sub_sp">GRAMOROUSの人気アイテムが再入荷</div>
    <a href="{{ route('ec.brand') }}" class="top_btn_sp">Pick up</a>
</div>

<div class="top2_sp">
    <div class="top_main_sp">Andy 新作ドレス</div>
    <div class="top_sub_sp">
        肩にレースリボンをデザインしセクシーな印象のドレス。<br>
        色気がアップする『ブラック』と 清楚な印象の『ホワイト』<br>
        あざとすぎない『ダークピンク』の3色展開。<br>
        裾部分にフリルデザインを合わせ、<br>
        フロントは大胆なシースルーレース。<br>
        上品でセクシーな大人のミニドレスです。
    </div>
    <a href="" class="top_btn_sp">NEW ARRIVAL</a>
</div>

<div class="top3_sp">
    <div class="top_main_sp">人気アイテムランキング</div>
    <div class="top_sub_sp">最新の人気アイテムランキングを発表！</div>
    <a href="{{ route('ec.ranking') }}" class="top_btn_sp">RANKING</a>
</div>

<div class="top4_sp">
    <div class="top_main_sp">TOPICS</div>
    <div class="top_sub_sp">
        ANDY Fashion Pressの最新号が配布開始！<br>
        新しくWebカタログも同時配信が開始された<br>
        Fashion Pressなら、お買い物の際にいつでも<br>
        理想のおしゃれなスタイルを探すことができます！<br>
        用途に合わせてアナログとデジタルを使い分けて<br>
        お楽しみください。
    </div>
    <a href="{{ route('ec.topics') }}" class="top_btn_sp">TOPICS</a>
</div>

<div class="top5_sp">
    <div class="top_main_sp">SCENE・NEEDS</div>
    <div class="top_sub_sp">アフタースタイルからパーティースタイルまで、<br>それぞれの用途に合わせたアイテム探し。</div>
    <a href="" class="top_btn_sp">SCENE・NEEDS</a>
</div>

<div class="right_title_ja" style="padding: 0 10px;">あなたにオススメのアイテム</div>
<div class="ranking_list_flex_sp" style="padding: 0 10px;">
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
<a href="{{ route('ec.recommend') }}" class="top_more_btn">もっと見る</a>

<div class="right_title_en" style="padding: 0 10px;">INFORMATION</div>
<div class="top_info_div_sp">2022.08.10<br><a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>
<div class="top_info_div_sp">2022.08.10<br><a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>
<div class="top_info_div_sp">2022.08.10<br><a href="" class="top_info_a">一部商品センター棚卸しによる商品のお届けについて</a></div>


@endsection