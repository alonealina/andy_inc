@extends('layouts.app_cs')

@section('content')
<img src="{{ asset('img/topics_header.png') }}" class="company_img" alt="">
<div class="topics_genre_list">
    <a href="" class="topics_genre">ALL</a>
    <a href="" class="topics_genre">発送商品</a>
    <a href="" class="topics_genre">新作商品</a>
    <a href="" class="topics_genre">納期変更</a>
    <a href="" class="topics_genre">画像追加</a>
</div>

<div class="item_list">
    <a href="" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="date_mark">2022.08.09</div>
        </div>
        <div class="item_detail_div">
            <div class="item_genre_list">
                <div class="blue_genre">発送商品</div>
                <div class="pink_genre">新作商品</div>
                <div class="orange_genre">納期変更</div>
                <div class="green_genre">画像追加</div>
            </div>
            <div class="item_right_name">アイテム名前テスト</div>
            <div class="item_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
    </a>

    <a href="" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="date_mark">2022.08.09</div>
        </div>
        <div class="item_detail_div">
            <div class="item_genre_list">
                <div class="blue_genre">発送商品</div>
                <div class="pink_genre">新作商品</div>
                <div class="orange_genre">納期変更</div>
                <div class="green_genre">画像追加</div>
            </div>
            <div class="item_right_name">アイテム名前テスト</div>
            <div class="item_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
    </a>

    <a href="" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="date_mark">2022.08.09</div>
        </div>
        <div class="item_detail_div">
            <div class="item_genre_list">
                <div class="blue_genre">発送商品</div>
                <div class="pink_genre">新作商品</div>
                <div class="orange_genre">納期変更</div>
                <div class="green_genre">画像追加</div>
            </div>
            <div class="item_right_name">アイテム名前テスト</div>
            <div class="item_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
    </a>

    <a href="" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="date_mark">2022.08.09</div>
        </div>
        <div class="item_detail_div">
            <div class="item_genre_list">
                <div class="blue_genre">発送商品</div>
                <div class="pink_genre">新作商品</div>
                <div class="orange_genre">納期変更</div>
                <div class="green_genre">画像追加</div>
            </div>
            <div class="item_right_name">アイテム名前テスト</div>
            <div class="item_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>
    </a>

</div>

@endsection




@section('content_sp')
<a href="" class="topics_genre_sp current_genre" style="margin-top:100px;">ALL</a>
<div class="topics_genre_list_sp">
    <a href="" class="topics_genre_sp">発送商品</a>
    <a href="" class="topics_genre_sp">新作商品</a>
    <a href="" class="topics_genre_sp">納期変更</a>
    <a href="" class="topics_genre_sp">画像追加</a>
</div>


<a href="" class="item_a_sp">
    <div class="topic_img_div_sp">
        <img src="{{ asset('img/item_sample.png') }}" class="top_item_img_sp" alt="">
        <div class="date_mark">2022.08.09</div>
    </div>
    <div class="topic_detail_div">
        <div class="item_genre_list">
            <div class="blue_genre">発送商品</div>
            <div class="pink_genre">新作商品</div>
            <div class="orange_genre">納期変更</div>
            <div class="green_genre">画像追加</div>
        </div>
        <div class="topic_right_name">アイテム名前テスト</div>
        <div class="topic_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
    </div>
</a>

<a href="" class="item_a_sp">
    <div class="topic_img_div_sp">
        <img src="{{ asset('img/item_sample.png') }}" class="top_item_img_sp" alt="">
        <div class="date_mark">2022.08.09</div>
    </div>
    <div class="topic_detail_div">
        <div class="item_genre_list">
            <div class="blue_genre">発送商品</div>
            <div class="pink_genre">新作商品</div>
            <div class="orange_genre">納期変更</div>
            <div class="green_genre">画像追加</div>
        </div>
        <div class="topic_right_name">アイテム名前テスト</div>
        <div class="topic_right_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
    </div>
</a>


@endsection