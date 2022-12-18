@extends('layouts.app_ec')

@section('content')

<div class="search_title">全ての検索結果</div>

<div class="search_page_bar">
    <div><span style="font-size:20px; font-weight: bold;">54694</span>件中60件を表示しています</div>
    <div>
        <select name="count" class="search_select">
            <option value="おすすめ順">おすすめ順</option>
            <option value="新着順">新着順</option>
            <option value="価格が高い順">価格が高い順</option>
            <option value="価格が低い順">価格が低い順</option>
            <option value="お気に入り数順">お気に入り数順</option>
        </select>    
    </div>
</div>


<div class="cart_flex">
    <div class="flex_page_left">

        <div class="search_check_div">
            <input id="check1" type="checkbox" name="" class="" value="1">　在庫あり
        </div>
        <div class="search_check_div">
            <input id="check1" type="checkbox" name="" class="" value="1">　通常
        </div>
        <div class="search_check_div">
            <input id="check1" type="checkbox" name="" class="" value="1">　セール
        </div>

        <div class="search_left_title">カラー</div>

        <div class="search_left_title">サイズ</div>
        <div class="search_check_div">
            <input id="check1" type="checkbox" name="" class="" value="1">　S
        </div>
        <div class="search_check_div">
            <input id="check1" type="checkbox" name="" class="" value="1">　M
        </div>

        <div class="search_left_title">価格</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_short', 'placeholder' => ''] ) !!} ～ 
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_short', 'placeholder' => ''] ) !!} 円 

        <div class="search_left_title">フリーワード</div>
        {!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_long', 'placeholder' => ''] ) !!}
        <a href="" class="search_page_btn">検索</a>

        <div class="search_left_title">BRAND</div>
        <a href="" class="ranking_left_a">Andy</a>
        <a href="" class="ranking_left_a">PREMIUM Andy</a>
        <a href="" class="ranking_left_a">GLAMOROUS</a>
        <a href="" class="ranking_left_a">an</a>
        <a href="" class="ranking_left_a">couture an</a>
        <a href="" class="ranking_left_a">an to you</a>
    </div>

    <div class="flex_page_right">
        <div class="ranking_list_flex">
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>

            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>

            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>
            <div class="search_div">
                <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
                <div class="fav_item_name">Andy</div>
                <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
                <div class="fav_item_text">￥12,100</div>
                <div class="time_sale">TIME SALE</div>
            </div>


        </div>
    </div>
</div>



@endsection


@section('content_sp')



<div class="search_left_title">価格</div>
{!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_short_sp', 'placeholder' => ''] ) !!} ～ 
{!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_short_sp', 'placeholder' => ''] ) !!} 円 

<div class="search_left_title" style="margin-top: 20px;">フリーワード</div>
{!! Form::text('freeword' ,isset($test) ? $test : null , ['class' => 'search_text_long', 'placeholder' => ''] ) !!}

<div class="search_flex_sp">
    <div class="" style="padding-top: 15px;">
        <div class="search_check_div_sp">
            <input id="check1" type="checkbox" name="" class="" value="1">　在庫あり
        </div>
        <div class="search_check_div_sp">
            <input id="check1" type="checkbox" name="" class="" value="1">　通常
        </div>
        <div class="search_check_div_sp">
            <input id="check1" type="checkbox" name="" class="" value="1">　セール
        </div>
    </div>

    <div class="">
        <div class="search_sub_title_sp">サイズ</div>
        <div class="search_check_div_sp">
            <input id="check1" type="checkbox" name="" class="" value="1">　S
        </div>
        <div class="search_check_div_sp">
            <input id="check1" type="checkbox" name="" class="" value="1">　M
        </div>
    </div>

    <div class="search_brand_sp">
        <div class="search_sub_title_sp" style="width:100%;">BRAND</div>
        <a href="" class="search_left_sp">Andy</a>
        <a href="" class="search_right_sp">an</a>
        <a href="" class="search_left_sp">PREMIUM Andy</a>
        <a href="" class="search_right_sp">couture an</a>
        <a href="" class="search_left_sp">GLAMOROUS</a>
        <a href="" class="search_right_sp">an to you</a>
    </div>
</div>

<div class="search_left_title">カラー</div>

<a href="" class="search_page_btn">検索</a>

<div class="search_title_sp">全ての検索結果</div>
<div><span style="font-size:20px; font-weight: bold;">54694</span>件中60件を表示しています</div>

<div class="search_page_bar">
    <div>
        <select name="count" class="search_select">
            <option value="おすすめ順">おすすめ順</option>
            <option value="新着順">新着順</option>
            <option value="価格が高い順">価格が高い順</option>
            <option value="価格が低い順">価格が低い順</option>
            <option value="お気に入り数順">お気に入り数順</option>
        </select>    
    </div>
</div>

<div class="ranking_list_flex">
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
@endsection