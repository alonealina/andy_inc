@extends('layouts.app')

@section('content')
<div class="header_margin">
    <img src="../img/brand/{{ $brand->logo_img }}" class="brand_logo" alt="">
</div>

<div class="brand_concept_div">
    <div class="brand_concept_title">CONCEPT</div>
    <div class="brand_concept1">{{ $brand->concept1 }}</div>
    <div class="brand_concept2">{{ $brand->concept2 }}</div>
    <div class="brand_concept3">{!! nl2br(e($brand->concept3)) !!}</div>
</div>

<div class="brand_concept_title">NEWS<a href="{{ route('news') }}" class="news_btn_a"><div class="news_btn_div">ニュース一覧を見る</div></a></div>

<ul class="slider_news">
    @foreach ($news_list as $news)
    <li class=""><a href="{{ route('news.show', ['id' => $news->id]) }}">
        <img src="../img/news/{{ $news->img }}" class="top_img1" alt="">
        <div class="brand_news_date">{{ $news->notice_date }}</div>
        <div class="brand_news_title">{{ $news->title }}</div>
    </a></li>
    @endforeach
</ul>

<div class="stylebook_pink">STYLE BOOK</div>
<a href="{{ route('stylebook.show', ['url' => $brand->url ]) }}" class="stylebook_btn_a"><div class="stylebook_btn_div">最新のスタイルブックを見る</div></a>

<div class="brand_store_flex">
    <a href="{{ route('store.index') }}" class="brand_store_a">
        <div class="brand_store_en">STORE LIST</div>
        <div class="brand_store_ja">ストアリスト</div>
    </a>
    <a href="http://www.andy-dress.com/" class="brand_store_a">
        <div class="brand_store_en">ONLINE STORE</div>
        <div class="brand_store_ja">オンラインストア</div>
    </a>
</div>

@endsection


@section('content_sp')

<img src="../img/brand/{{ $brand->logo_img }}" class="brand_logo" alt="">


<div class="brand_concept_div_sp">
    <div class="brand_concept_title_sp">CONCEPT</div>
    <div class="brand_concept1_sp">{{ $brand->concept1 }}</div>
    <div class="brand_concept2_sp">{{ $brand->concept2 }}</div>
    <div class="brand_concept3_sp">{!! nl2br(e($brand->concept3)) !!}</div>
</div>

<div class="brand_news_title_sp">NEWS</div>

<ul class="slider_news_sp">
    @foreach ($news_list as $news)
    <li class=""><a href="{{ route('news.show', ['id' => $news->id]) }}">
        <img src="../img/news/{{ $news->img }}" class="top_img1" alt="">
        <div class="brand_news_date">{{ $news->notice_date }}</div>
        <div class="brand_news_title">{{ $news->title }}</div>
    </a></li>
    @endforeach
</ul>

<a href="{{ route('news') }}" class="news_btn_a_sp"><div class="news_btn_div">ニュース一覧を見る</div></a>
<div class="stylebook_pink_sp">STYLE BOOK</div>
<a href="{{ route('stylebook.show', ['url' => $brand->url ]) }}" class="stylebook_btn_a_sp"><div class="stylebook_btn_div">最新のスタイルブックを見る</div></a>

<a href="{{ route('store.index') }}" class="brand_store_a_sp">
    <div class="brand_store_en_sp">STORE LIST</div>
    <div class="brand_store_ja_sp">ストアリスト</div>
</a>
<a href="http://www.andy-dress.com/" class="brand_store_a_sp">
    <div class="brand_store_en_sp">ONLINE STORE</div>
    <div class="brand_store_ja_sp">オンラインストア</div>
</a>




@endsection