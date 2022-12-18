@extends('layouts.app_cs')

@section('content')

<div class="item_list" style="margin-top: 220px;">
    <div class="item_sample_div">
        <img src="{{ asset('img/add_sample.png') }}" class="sample_main" alt="">
        @if($item->price_down_flg)
        <div class="price_down_mark_b">Price Down</div>
        @endif
        @if($item->add_production_flg)
        <div class="add_production_mark_b" @if($item->price_down_flg) style="margin-top: -116px;" @endif>追加生産中</div>
        @endif
        @if($item->new_flg)
        <div class="new_mark_b" @if($item->price_down_flg || $item->add_production_flg ) style="margin-top: -116px;" @endif>新作</div>
        @endif
    </div>
    <div class="item_sample_div" style="padding-left:50px;">
        <div class="item_name_main">{{ $item->name }}</div>
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
        <a href="" class="img_dl_a">画像ダウンロード</a>
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
</div>

<div class="item_content_title">商品情報</div>

<div class="item_content_column">
    <div class="item_content_name">納期</div>{{ $item->deadline }}
</div>

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




@endsection




@section('content_sp')



<img src="{{ asset('img/add_sample.png') }}" class="sample_main_sp" alt="">

@if($item->price_down_flg)
<div class="price_down_mark">Price Down</div>
@endif
@if($item->add_production_flg)
<div class="add_production_mark" @if($item->price_down_flg) style="margin-top: -74px;" @endif>追加生産中</div>
@endif
@if($item->new_flg)
<div class="new_mark" @if($item->price_down_flg || $item->add_production_flg ) style="margin-top: -74px;" @endif>新作</div>
@endif

<div class="item_img_flex" style="margin-top:110px;">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
    <img src="{{ asset('img/add_sample.png') }}" class="sample_sub" alt="">
</div>

<a href="" class="img_dl_a_sp">画像ダウンロード</a>

<div class="item_name_main_sp">{{ $item->name }}</div>
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



<div class="item_content_title_sp">商品情報</div>

<div class="item_content_column_sp">
    <div class="item_content_name">納期</div>{{ $item->deadline }}
</div>

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