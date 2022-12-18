@extends('layouts.app_ec')

@section('content')

<div class="item_list_title">MODEL LIST</div>

<div class="item_list_flex">
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        愛沢えみり
    </div>
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        彩花ゆい
    </div>
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        綾野あすか
    </div>
</div>

<div class="item_list_flex">
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        一條りおな
    </div>
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        岩本紗也加
    </div>
    <div class="model_div">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img" alt="">
        えれな
    </div>
</div>


@endsection




@section('content_sp')
<div class="item_list_title_sp">MODEL LIST</div>

<div class="item_list_flex_sp">
    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        愛沢えみり
    </div>
    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        彩花ゆい
    </div>
    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        綾野あすか
    </div>

    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        一條りおな
    </div>
    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        岩本紗也加
    </div>
    <div class="model_div_sp">
        <img src="{{ asset('img/model_dummy.png') }}" class="model_img_sp" alt="">
        えれな
    </div>
</div>

@endsection