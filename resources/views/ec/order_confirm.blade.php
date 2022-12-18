@extends('layouts.app_ec')

@section('content')

<div class="cart_title_div"><div class="cart_title">ご注文内容確認</div></div>

<img src="{{ asset('img/cart_bar2.png') }}" class="cart_bar" alt="">

<div class="cart_flex">
    <div class="cart_left">
        <div class="order_detail">
            <div class="order_detail_name">お客様情報</div>
            <div class="order_detail_content">山田 太郎様<br>〒000-0000 大阪府 堺市北区金岡町 000-0-0<br>08000000000<br>andy123@andy.co.jp</div>
            <div class="order_detail_change"></div>
        </div>
        <div class="order_detail">
            <div class="order_detail_name">お届け先住所</div>
            <div class="order_detail_content">山田 太郎様<br>〒000-0000 大阪府 堺市北区金岡町 000-0-0<br>08000000000</div>
            <div class="order_detail_change"><a href="" class="change_btn">変更</a></div>
        </div>
        <div class="order_detail">
            <div class="order_detail_name">配送日時</div>
            <div class="order_detail_content">▼出荷予定<br>8/19（金） ～ 8/25（木）<br><br>▼指定配送日時<br>指定無し（最短）</div>
            <div class="order_detail_change"><a href="" class="change_btn">変更</a></div>
        </div>
        <div class="order_detail">
            <div class="order_detail_name">支払い方法</div>
            <div class="order_detail_content">代引 手数料330円（税込）</div>
            <div class="order_detail_change"><a href="" class="change_btn">変更</a></div>
        </div>

        <div class="cart_left_bar" style="margin-top:50px;">
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
        <a href="{{ route('ec.order_complete') }}" class="cart_btn"><p style="font-size:12px; margin-bottom:0px;">以下のご利用規約に同意の上で</p>注文する</a>
        <div class="cart_date cart_bb">出荷予定日 8/ 19 (金) ～ 8/ 25 (木)</div>
        <div class="cart_price_flex">商品合計<div class="cart_price_right">39,400円</div></div>
        <div class="cart_price_flex">配送料<div class="cart_price_right">550円</div></div>
        <div class="cart_price_flex cart_bb">決済手数料<div class="cart_price_right">330円</div></div>
        <div class="cart_price_flex">合計(税込)<div class="cart_price_right">40,280円</div></div>
        <div class="cart_explain">・個人情報の取扱いに関する規約をお読みの上、ご注文下さい。個人情報の規約は<a href="" class="cart_explain_a">こちら</a></div>
        <div class="cart_explain">・ワールド オンラインストア利用規約をお読みの上、ご注文下さい。利用規約は<a href="" class="cart_explain_a">こちら</a></div>
        <div class="cart_explain">・ご注文いただく商品は、ワールドが販売し、お客様配送致します。返品及びその他の取引条件につきましては、<a href="" class="cart_explain_a">こちら</a>をご確認ください。</div>
        <div class="cart_explain">・「注文する」ボタンを押された時点で、ご注文いただいた商品の取引に関連する範囲内でワールドとお客様の個人情報を共同利用することにご同意のうえご注文いただいたものと致します。</div>
    </div>
</div>

@endsection




@section('content_sp')
<div class="cart_title_div_sp"><div class="cart_title">ご注文内容確認</div></div>

<img src="{{ asset('img/cart_bar2_sp.png') }}" class="cart_bar_sp" alt="">

<div class="order_detail_sp">
    <div class="order_detail_name_sp">お客様情報</div>
    <div class="order_detail_content_sp">山田 太郎様<br>〒000-0000 大阪府 堺市北区金岡町 000-0-0<br>08000000000<br>andy123@andy.co.jp</div>
</div>
<div class="order_detail_sp">
    <div class="order_detail_name_sp">お届け先住所</div>
    <div class="order_detail_content_sp">山田 太郎様<br>〒000-0000 大阪府 堺市北区金岡町 000-0-0<br>08000000000</div>
    <div class="order_detail_change_sp"><a href="" class="change_btn">変更</a></div>
</div>
<div class="order_detail_sp">
    <div class="order_detail_name_sp">配送日時</div>
    <div class="order_detail_content_sp">▼出荷予定<br>8/19（金） ～ 8/25（木）<br><br>▼指定配送日時<br>指定無し（最短）</div>
    <div class="order_detail_change_sp"><a href="" class="change_btn">変更</a></div>
</div>
<div class="order_detail_sp cart_bb" style="margin-bottom:50px;">
    <div class="order_detail_name_sp">支払い方法</div>
    <div class="order_detail_content_sp">代引 手数料330円（税込）</div>
    <div class="order_detail_change_sp"><a href="" class="change_btn">変更</a></div>
</div>

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
<a href="{{ route('ec.order_complete') }}" class="cart_btn" style="margin-top:30px;"><p style="font-size:12px; margin-bottom:0px;">以下のご利用規約に同意の上で</p>注文する</a>
<div class="cart_explain" style="margin-top:30px;">・個人情報の取扱いに関する規約をお読みの上、ご注文下さい。個人情報の規約は<a href="" class="cart_explain_a">こちら</a></div>
<div class="cart_explain">・ワールド オンラインストア利用規約をお読みの上、ご注文下さい。利用規約は<a href="" class="cart_explain_a">こちら</a></div>
<div class="cart_explain">・ご注文いただく商品は、ワールドが販売し、お客様配送致します。返品及びその他の取引条件につきましては、<a href="" class="cart_explain_a">こちら</a>をご確認ください。</div>
<div class="cart_explain">・「注文する」ボタンを押された時点で、ご注文いただいた商品の取引に関連する範囲内でワールドとお客様の個人情報を共同利用することにご同意のうえご注文いただいたものと致します。</div>





@endsection