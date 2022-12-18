@extends('layouts.app_cs')

@section('content')
<img src="{{ asset('img/collection_header.png') }}" class="company_img" alt="">
<div class="collection_logo_list">
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_all.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_pandy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_andy.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_glamorous.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_can.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_an.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_aty.png') }}" class="collection_logo_img" alt=""></a>
</div>

<div class="collection_logo_list">
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_concept.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_features.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_fashion.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_dremo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_miyu.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_photo.png') }}" class="collection_logo_img" alt=""></a>
    <a href="" class="collection_logo_a"><img src="{{ asset('img/collection_logo_other.png') }}" class="collection_logo_img" alt=""></a>
</div>

<div class="collection_div">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
    <img src="{{ asset('img/collection_sample.png') }}" class="collection_img">
</div>


@endsection




@section('content_sp')
<img src="{{ asset('img/company.png') }}" style="width: 100%;" alt="">
<div class="company_detail_sp">
    <div class="page_title">会社概要</div>
    <div class="company_flex_sp">
        <div class="company_title_sp">社名</div>株式会社アンディ
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">代表取締役</div>野田裕治
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">事業内容</div>婦人服製造・卸等
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">展開ブランド</div>Premium Andy<br>Andy<br>GLAMOROUS<br>couture an<br>an<br>antoyou
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">所在地</div>
        <div>〒542-0077<br>大阪市中央区道頓堀１丁目東5-21-B1<br><a class="google_a" href="https://www.google.co.jp/maps/search/%E5%A4%A7%E9%98%AA%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E9%81%93%E9%A0%93%E5%A0%80%EF%BC%91%E4%B8%81%E7%9B%AE%E6%9D%B15-21-B1">
            GOOGLE MAP</a>
        </div>
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">営業日</div>月～金（年末年始、お盆、祝日を除く）
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">営業時間</div>10:00～19:00
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">Mail</div>info@andy-creative.com
    </div>
    <div class="company_flex_sp">
        <div class="company_title_sp">WEB</div><a href="http://andy-creative.com/" class="company_a" target="_blank">http://andy-creative.com/</a>
    </div>
</div>

@endsection