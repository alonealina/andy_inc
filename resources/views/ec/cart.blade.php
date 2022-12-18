@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">ショッピングカート</div></div>

<img src="{{ asset('img/cart_bar1.png') }}" class="cart_bar" alt="">

<div class="cart_text">現在のカートグループは1つです。</div>

<div class="cart_flex">
    <div class="cart_left">
        <div class="cart_left_bar">
            <div class="cart_info">商品情報</div>
            <div class="cart_color">カラー</div>
            <div class="cart_size">サイズ</div>
            <div class="cart_count">数量</div>
            <div class="cart_price">金額</div>
            <div class="cart_delete"></div>
        </div>

        <div class="cart_left_detail cart_bb">
            <div class="cart_info">
                <div class="cart_info_flex">
                    <img src="{{ asset('img/cart_sample1.png') }}" class="cart_item_img" alt="">
                    <div class="cart_info_text">Andy<br>【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!</div>
                </div>
            </div>
            <div class="cart_color">レッド(0000)</div>
            <div class="cart_size">(S)</div>
            <div class="cart_count">
                <select name="count" class="count_select">
                    @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="cart_price">29,700円</div>
            <div class="cart_delete"><a href="" class="delete_a">削除する</a></div>
        </div>

        <div class="cart_left_detail cart_bb">
            <div class="cart_info">
                <div class="cart_info_flex">
                    <img src="{{ asset('img/cart_sample2.png') }}" class="cart_item_img" alt="">
                    <div class="cart_info_text">Andy<br>【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!</div>
                </div>
            </div>
            <div class="cart_color">ブルー(0000)</div>
            <div class="cart_size">(S)</div>
            <div class="cart_count">
                <select name="count" class="count_select">
                    @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="cart_price">29,700円</div>
            <div class="cart_delete"><a href="" class="delete_a">削除する</a></div>
        </div>
    </div>
    <div class="cart_right">
        <a href="{{ route('ec.info_form') }}" class="cart_btn">レジに進む</a>
        <div class="cart_date cart_bb">出荷予定日 8/ 19 (金) ～ 8/ 25 (木)</div>
        <div class="cart_price_flex">商品合計<div class="cart_price_right">39,400円</div></div>
        <div class="cart_price_flex cart_bb">配送料<div class="cart_price_right">550円</div></div>
        <div class="cart_price_flex">合計(税込)<div class="cart_price_right">39,950円</div></div>
    </div>
</div>

@endsection




@section('content_sp')
<div class="cart_title_div_sp"><div class="cart_title">ショッピングカート</div></div>

<img src="{{ asset('img/cart_bar1_sp.png') }}" class="cart_bar_sp" alt="">



<div class="cart_left_detail cart_bb">
    <img src="{{ asset('img/cart_sample1.png') }}" class="cart_item_img_sp" alt="">
    <div class="cart_detail_sp">
        Andy<br>【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">カラー</div>レッド(0000)
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">サイズ</div>(S)
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">数量</div>
            <select name="count" class="count_select">
                @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">金額</div>29,700円
        </div>
        <a href="" class="delete_a" style="float:right;">削除する</a>
    </div>
</div>

<div class="cart_left_detail cart_bb">
    <img src="{{ asset('img/cart_sample2.png') }}" class="cart_item_img_sp" alt="">
    <div class="cart_detail_sp">
        Andy<br>【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">カラー</div>ブルー(0000)
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">サイズ</div>(S)
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">数量</div>
            <select name="count" class="count_select">
                @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="cart_detail_flex_sp">
            <div class="cart_detail_title_sp">金額</div>29,700円
        </div>
        <a href="" class="delete_a" style="float:right;">削除する</a>
    </div>
</div>

<div class="cart_date cart_bb" style="text-align:center;">出荷予定日 8/ 19 (金) ～ 8/ 25 (木)</div>
<div class="cart_price_flex_sp">商品合計<div class="cart_price_right">39,400円</div></div>
<div class="cart_price_flex_sp cart_bb">配送料<div class="cart_price_right">550円</div></div>
<div class="cart_price_flex_sp">合計(税込)<div class="cart_price_right">39,950円</div></div>
<a href="{{ route('ec.info_form') }}" class="cart_btn">レジに進む</a>





@endsection