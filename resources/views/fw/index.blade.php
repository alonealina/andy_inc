@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<div class="wrapper">
    <ul class="slider_fw">
        <li class="slider-item slider-item01"><div class="top_fixed" style="right: 175px;">MODEL：みゆう</div></li>
        <li class="slider-item slider-item02"><div class="top_fixed" style="right: 175px;">MODEL：みゆう</div></li>
        <li class="slider-item slider-item03"><div class="top_fixed" style="right: 175px;">MODEL：みゆう</div></li>
        <li class="slider-item slider-item04"><div class="top_fixed">MODEL：彩花ゆい</div></li>
        <li class="slider-item slider-item05"><div class="top_fixed">MODEL：彩花ゆい</div></li>
    </ul>
</div>

<div class="top_fixed_div">
    <a href="{{ route('fw.index') }}" class="top_logo_a">
        <img src="{{ asset('img/fw_top_logo.png') }}" class="" alt="" style="width: 100%;left: -20px;position: relative;"><br>
        <div class="top_logo_text" style="top: -20px;position: relative;">November11</div>
    </a>
    <a class="top_read_now_a" onclick="clickReadNowButton()">Read now</a>
</div>

<div class="menu-content_top">
    <header style="top: 0px; padding-left: 0;">
        <a href="{{ route('fw.index') }}" style="width: 30%;"><img src="{{ asset('img/andy_fw_logo.png') }}" class="" alt="" style="width: 100%;"></a>
    </header>
    <div class="menu_flex" style="width:100%;margin-top: 50px;">
        <div class="menu_list" style="width:25%;">
            <a href="{{ route('fw.catalog_gms') }}" class="menu_list_a">Dress catalog : GLAMOROUS</a>
            <a href="{{ route('fw.catalog_an') }}" class="menu_list_a">Dress catalog : an</a>
            <a href="{{ route('fw.catalog_andy') }}" class="menu_list_a">Dress catalog : Andy</a>
            <a href="{{ route('fw.new_dress') }}" class="menu_list_a">Bijou Dress with Asuka Ayano</a>
            <a href="{{ route('fw.cover_girl') }}" class="menu_list_a">CoverGirl</a>
            <a href="{{ route('fw.pickup') }}" class="menu_list_a">Pick up AndyModel</a>
            <a href="{{ route('fw.enrike') }}" class="menu_list_a">Interview 'Eri Ogawa'</a>
            <a href="{{ route('fw.santa') }}" class="menu_list_a">Christmas Costume</a>
            <a href="{{ route('fw.susukino') }}" class="menu_list_a">It Girl in Susukino</a>
            <a href="{{ route('fw.bar') }}" class="menu_list_a">Girls Public Bar EMO</a>
        </div>
        <div class="menu_list" style="width:25%;">
            <a href="{{ route('fw.birthday') }}" class="menu_list_a">Birthday Event Report</a>
            <a href="{{ route('fw.maria_rui') }}" class="menu_list_a">Conversation Rui&Maria</a>
            <a href="{{ route('fw.dress_restaurant') }}" class="menu_list_a">Restaurant 'Rinascere Dojima'</a>
            <a href="{{ route('fw.pet') }}" class="menu_list_a">beloved dog</a>
            <a href="{{ route('fw.zara') }}" class="menu_list_a">special contens「ZARA」</a>
            <a href="{{ route('fw.archivio') }}" class="menu_list_a">special contens 「archivio」</a>
            <a href="{{ route('fw.fortune') }}" class="menu_list_a">Divination</a>
            <a href="{{ route('fw.spur') }}" class="menu_list_a">Dress shop 'SPUR'</a>
            <a href="{{ route('fw.famous') }}" class="menu_list_a">Recommended store</a>
            <a href="{{ route('fw.sns') }}" class="menu_list_a">SNS</a>
        </div>
        <!-- <div class="back_number_list">
            <div class="back_number_title">Back Number</div>
            <a href="" class="back_number_a" style="margin-top: 25px;">2022 AUTUMN / WINTER 07</a>
            <a href="" class="back_number_a">2022 AUTUMN 06</a>
            <a href="" class="back_number_a">2022 AUTUMN 05</a>
            <a href="" class="back_number_a">2022 AUTUMN 04</a>
        </div> -->
    </div>
    <div class="menu_flex" style="margin-top: 50px;justify-content: end;margin-right: 30px;">
        <div class="menu_list2" style="width: auto;">
            <a href="http://www.andy-dress.com/" class="menu_list_a2" target="_blank">Andy official web shop</a>
            <a href="{{ route('fw.shop_list') }}" class="menu_list_a2">Shop List</a>
            <a href="{{ route('fw.model_list') }}" class="menu_list_a2">MODEL List</a>
            <a href="{{ route('fw.contact') }}" class="menu_list_a2">Contact</a>
            <a href="{{ route('fw.about') }}" class="menu_list_a2">About</a>
        </div>
    </div>
    <div class="header_icon_list">
        <a href="https://www.instagram.com/andy_fashion_press" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="header_icon_sp"></a>
        <a href=""><img src="{{ asset('img/line.png') }}" class="header_icon_sp"></a>
        <a href=""><img src="{{ asset('img/twitter.png') }}" class="header_icon_sp"></a>
        <a href="https://www.youtube.com/channel/UCHHbNcktTOM3iyrjeBUs0oQ/featured" target="_blank"><img src="{{ asset('img/youtube.png') }}" class="header_icon_sp" style="width: 56px;"></a>
    </div>
    <a href="{{ route('fw.catalog_an') }}" class="top_read_all_a">Read All</a>
</div>

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="wrapper">
    <ul class="slider_fw">
        <li class="slider-item slider-item01_sp"><div class="top_fixed_sp">MODEL：みゆう</div></li>
        <li class="slider-item slider-item02_sp"><div class="top_fixed_sp">MODEL：みゆう</div></li>
        <li class="slider-item slider-item03_sp"><div class="top_fixed_sp">MODEL：みゆう</div></li>
        <li class="slider-item slider-item04_sp"><div class="top_fixed_sp">MODEL：彩花ゆい</div></li>
        <li class="slider-item slider-item05_sp"><div class="top_fixed_sp">MODEL：彩花ゆい</div></li>
    </ul>
</div>



@endsection