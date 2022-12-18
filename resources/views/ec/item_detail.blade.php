@extends('layouts.app_ec')

@section('content')

<div class="item_list">
    <div class="item_sample_div">
        <img src="{{ asset('img/add_sample.png') }}" class="sample_main" alt="">
        <div class="item_color_name">レッド(252)</div>
    </div>
    <div class="item_sample_div" style="padding-left:50px;">
        <div class="item_name_main">{{ $item->name }}<a href="#!"><img src="{{ asset('img/fav_white.png') }}" class="item_fav" alt=""></a></div>
        <div class="item_price_main">￥{{ number_format($item->price_tax) }}</div>
        <div class="item_column_main">
            <div class="item_column_name_main">ブランド</div>{{ $brand_name }}
        </div>
        <div class="item_column_main">
            <div class="item_column_name_main">サイズ</div>
            @php $cnt = 1; $length = count($item_size_list); @endphp
            @foreach ($item_size_list as $item_size)
            {{ $item_size->name }}
            @if ($cnt != $length)  /  @endif
            @php $cnt++; @endphp
            @endforeach
        </div>
        <div class="item_column_main">
            <div class="item_column_name_main">カラー</div>
        </div>
        <div class="item_img_flex">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
            <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
        </div>
    </div>
    <div class="item_flex_right_back">
        <img src="{{ asset('img/back_yazi.png') }}" class="back_yazi" alt=""> <a href="" class="item_back_a" onclick="history.back(-1);return false;">前のページに戻る</a>
    </div>
    <div class="item_flex_right">
        <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
        <div class="item_flex_right_text">00000(S)<br>在庫あり<br><br>￥29,700(税込)</div>
        <div class="item_right_btn">
            <a href="{{ route('ec.order_confirm') }}" class="cart_btn_black"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="width: 15px;"> カートに入れる</a>
            <a href="#!" class="stock_btn">店舗<br>在庫</a>
            <a href="#!"><img src="{{ asset('img/fav_white.png') }}" class="item_fav" alt=""></a>
        </div>
    </div>
    <div class="item_flex_right">
        <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
        <div class="item_flex_right_text">00000(S)<br>在庫あり<br><br>￥29,700(税込)</div>
        <div class="item_right_btn">
            <a href="{{ route('ec.order_confirm') }}" class="cart_btn_black"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="width: 15px;"> カートに入れる</a>
            <a href="#!" class="stock_btn">店舗<br>在庫</a>
            <a href="#!"><img src="{{ asset('img/fav_white.png') }}" class="item_fav" alt=""></a>
        </div>
    </div>
    <div class="item_flex_right">
        <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
        <div class="item_flex_right_text">00000(S)<br>在庫あり<br><br>￥29,700(税込)</div>
        <div class="item_right_btn">
            <a href="{{ route('ec.order_confirm') }}" class="cart_btn_black"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="width: 15px;"> カートに入れる</a>
            <a href="#!" class="stock_btn">店舗<br>在庫</a>
            <a href="#!"><img src="{{ asset('img/fav_white.png') }}" class="item_fav" alt=""></a>
        </div>
    </div>
</div>





<div class="item_content_title">商品情報</div>

<div class="item_content_column">
    <div class="item_content_name">カテゴリ</div>{{ $item->category }}
</div>

<div class="item_content_column">
    <div class="item_content_name">サイズ</div>
    @php $cnt = 1; $length = count($item_size_list); @endphp
    @foreach ($item_size_list as $item_size)
    {{ $item_size->name }}
    @if ($cnt != $length)  /  @endif
    @php $cnt++; @endphp
    @endforeach
</div>

<div class="item_content_column">
    <div class="item_content_name">カラー</div>{{ $item->color }}
</div>

<div class="item_content_column">
    <div class="item_content_name">価格</div>{{ number_format($item->price) }}円 (税込 {{ number_format($item->price_tax) }}円)
</div>

<div class="item_content_title">商品サイズ</div>

<div class="item_content_column">
    <div class="item_content_name2"></div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3">{{ $item_size->name }}</div>
    @endforeach
</div>

@if ($item_size->size_id != 5)
<div class="item_content_column">
    <div class="item_content_name2">バスト(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3">{{ $item_size->bust }}</div>
    @endforeach
</div>

<div class="item_content_column">
    <div class="item_content_name2">ウエスト(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3">{{ $item_size->waist }}</div>
    @endforeach
</div>

<div class="item_content_column">
    <div class="item_content_name2">ヒップ(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3">{{ $item_size->hip }}</div>
    @endforeach
</div>
@endif

<div class="item_content_column">
    <div class="item_content_name2">伸縮性</div>{{ $item->elasticity }}
</div>

<div class="item_content_column">
    <div class="item_content_name2">裏地</div>{{ $item->lining }}
</div>

<div class="item_content_column">
    <div class="item_content_name2">透け感</div>{{ $item->translucency }}
</div>

<div class="item_supple_text">
    ※平置き計測になります。<br>
    ※商品によって計測に誤差が生じる場合がございます。<br>
    ※モニターの設定状況によって、実際の商品と若干色が異なる場合がございます。<br>
    ※総柄の商品につきましては、生地の裁断箇所によって<br>
    商品一点ごとにパターン(柄)が異なります。
</div>

<div class="item_recommend_text">この商品を見た人はコチラの商品もチェックしています</div>

<div class="fav_list_flex">
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
    <div class="fav_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <div class="fav_item_name">Andy</div>
        <div class="fav_item_text">【WEB限定カラーあり/文字数制限テスト</div>
        <div class="fav_item_text">￥12,100</div>
    </div>
</div>

<a href="" class="more_btn">もっと見る</a>



@endsection




@section('content_sp')

<img src="{{ asset('img/add_sample.png') }}" class="sample_main_sp" alt="">
<div class="sp_item_mark">レッド(252)</div>

<div class="item_img_flex" style="margin-top:30px;">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
</div>

<div class="item_name_main_sp">追加生産中アイテムテスト<a href="{{ route('ec.favorite') }}" style="float: right;"><img src="{{ asset('img/fav_white.png') }}" style="width: 26px;"></a></div>
<div class="item_column_main_sp">
    <div class="item_brand_sp">ブランド</div>
    <div class="item_size_sp">サイズ</div>
    <div class="item_color_sp">カラー</div>
</div>
<div class="item_column_main_sp">
    <div class="item_brand_sp">{{ $brand_name }}</div>
    <div class="item_size_sp">
        @php $cnt = 1; $length = count($item_size_list); @endphp
        @foreach ($item_size_list as $item_size)
        {{ $item_size->name }}
        @if ($cnt != $length)  /  @endif
        @php $cnt++; @endphp
        @endforeach
    </div>
    <div class="item_color_sp"></div>
</div>

<div class="cart_left_detail cart_bb" style="border-top: 1px solid #CCCCCC;">
    <img src="{{ asset('img/cart_sample1.png') }}" class="item_detail_img_sp" alt="">
    <div class="item_detail_sp">
        Andy<br>
        <div class="item_detail_flex_sp" style="justify-content: space-between;">
            <div class="" style="width: 170px;">【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!</div>
            <a href="{{ route('ec.favorite') }}"><img src="{{ asset('img/fav_white.png') }}" style="width: 26px;"></a>
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">カラー</div>レッド(0000)
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">サイズ</div>(S)
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">金額</div>29,700円
        </div>
        <div class="item_btn_sp">
            <a href="{{ route('ec.order_confirm') }}" class="cart_btn_black_sp"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="width: 15px;"> カートに入れる</a>
            <a href="#!" class="stock_btn_sp">店舗<br>在庫</a>
        </div>
    </div>
</div>

<div class="cart_left_detail cart_bb">
    <img src="{{ asset('img/cart_sample1.png') }}" class="item_detail_img_sp" alt="">
    <div class="item_detail_sp">
        Andy<br>
        <div class="item_detail_flex_sp" style="justify-content: space-between;">
            <div class="" style="width: 170px;">【洗える】カラーが豊富!!grove一押しのMY BEST PANTS!!</div>
            <a href="{{ route('ec.favorite') }}"><img src="{{ asset('img/fav_white.png') }}" style="width: 26px;"></a>
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">カラー</div>レッド(0000)
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">サイズ</div>(S)
        </div>
        <div class="item_detail_flex_sp">
            <div class="cart_detail_title_sp">金額</div>29,700円
        </div>
        <div class="item_btn_sp">
            <a href="{{ route('ec.order_confirm') }}" class="cart_btn_black_sp"><img src="{{ asset('img/cart.png') }}" class="" alt="" style="width: 15px;"> カートに入れる</a>
            <a href="#!" class="stock_btn_sp">店舗<br>在庫</a>
        </div>
    </div>
</div>



<div class="item_content_title_sp">商品情報</div>

<div class="item_content_column_sp">
    <div class="item_content_name">カテゴリ</div>{{ $item->category }}
</div>

<div class="item_content_column_sp">
    <div class="item_content_name">サイズ</div>
    @php $cnt = 1; $length = count($item_size_list); @endphp
    @foreach ($item_size_list as $item_size)
    {{ $item_size->name }}
    @if ($cnt != $length)  /  @endif
    @php $cnt++; @endphp
    @endforeach
</div>

<div class="item_content_column_sp">
    <div class="item_content_name">カラー</div>{{ $item->color }}
</div>

<div class="item_content_column_sp">
    <div class="item_content_name">価格</div>{{ number_format($item->price) }}円 (税込 {{ number_format($item->price_tax) }}円)
</div>

<div class="item_content_title_sp">商品サイズ</div>

<div class="item_content_column_sp">
    <div class="item_content_name2_sp"></div>
    @foreach ($item_size_list as $item_size)
    @if ($item_size->size_id != 5)
    <div class="item_content_name3_sp">{{ $item_size->name }}</div>
    @else
    {{ $item_size->name }}
    @endif
    @endforeach
</div>

@if ($item_size->size_id != 5)
<div class="item_content_column_sp">
    <div class="item_content_name2_sp">バスト(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3_sp">{{ $item_size->bust }}</div>
    @endforeach
</div>

<div class="item_content_column_sp">
    <div class="item_content_name2_sp">ウエスト(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3_sp">{{ $item_size->waist }}</div>
    @endforeach
</div>

<div class="item_content_column_sp">
    <div class="item_content_name2_sp">ヒップ(cm)</div>
    @foreach ($item_size_list as $item_size)
    <div class="item_content_name3_sp">{{ $item_size->hip }}</div>
    @endforeach
</div>
@endif

<div class="item_content_column_sp">
    <div class="item_content_name2_sp">伸縮性</div>{{ $item->elasticity }}
</div>

<div class="item_content_column_sp">
    <div class="item_content_name2_sp">裏地</div>{{ $item->lining }}
</div>

<div class="item_content_column_sp">
    <div class="item_content_name2_sp">透け感</div>{{ $item->translucency }}
</div>

<div class="item_supple_text_sp">
    ※平置き計測になります。<br>
    ※商品によって計測に誤差が生じる場合がございます。<br>
    ※モニターの設定状況によって、実際の商品と若干色が異なる場合がございます。<br>
    ※総柄の商品につきましては、生地の裁断箇所によって<br>
    商品一点ごとにパターン(柄)が異なります。
</div>




@endsection