@extends('layouts.app_ec')

@section('content')

<div class="item_list_title">気になる部分を<p class="pink_p">カバー</p> コンプレックス別検索</div>

<div class="item_list_flex">
    <div class="complex_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <p class="pink_p">背中全体</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <p class="pink_p">二の腕</p>部分を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        出したくない<p class="pink_p">胸</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        目立たなく<br>
        <p class="pink_p">ウエスト</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img" alt="">
        <p class="pink_p">身長が低い方</p>の<br>
        バランスを<p class="pink_p">カバー</p>
    </div>
</div>


@endsection




@section('content_sp')
<div class="item_list_title_sp">気になる部分を<p class="pink_p">カバー</p><br>コンプレックス別検索</div>

<div class="item_list_flex_sp">
    <div class="complex_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <p class="pink_p">背中全体</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <p class="pink_p">二の腕</p>部分を<br>
        <p class="pink_p">カバー</p>
    </div>
    <div class="complex_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        出したくない<br>
        <p class="pink_p">胸</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        目立たなく<br>
        <p class="pink_p">ウエスト</p>を<p class="pink_p">カバー</p>
    </div>
    <div class="complex_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="complex_img_sp" alt="">
        <p class="pink_p">身長が低い方</p>の<br>
        バランスを<p class="pink_p">カバー</p>
    </div>
</div>


@endsection