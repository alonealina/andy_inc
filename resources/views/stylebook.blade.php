@extends('layouts.app')

@section('content')
<div class="stylebook_div">
    <a class="back_btn_a" onclick="history.back(-1);return false;"><div class="back_btn_div">戻る</div></a>
    <div class="stylebook_date">2022.0817</div>
    <div class="stylebook_main_div" id="stylebook">
        @foreach ($stylebook as $page)
        <img src="{{ asset('img/stylebook/'. $page->img) }}" class="top_img1"
        @if($page->page == 0) id="first" @elseif($page->page == 99) id="final" @else id="{{$page->page}}" @endif
        @if($page->page != 0) hidden @endif>
        @endforeach
    </div>
    <div class="stylebook_menu">
        <a class="stylebook_menu_a" onclick="clickFirstButton()"><<</a>
        <a class="stylebook_menu_a" onclick="clickBackButton()"><</a>
        <div class="stylebook_page" id="page">表紙</div>
        <a class="stylebook_menu_a" onclick="clickNextButton()">></a>
        <a class="stylebook_menu_a" onclick="clickFinalButton()">>></a>
    </div>
</div>

<script src="{{ asset('js/stylebook.js') }}"></script>
@endsection




@section('content_sp')

<div class="stylebook_date_sp">2022.0817</div>
<div class="stylebook_main_div" id="stylebook">
    @foreach ($stylebook as $page)
    <img src="{{ asset('img/stylebook/'. $page->img) }}" class="top_img1"
    @if($page->page == 0) id="first" @elseif($page->page == 99) id="final" @else id="{{$page->page}}" @endif
    @if($page->page != 0) hidden @endif>
    @endforeach
</div>
<div class="stylebook_menu_sp">
    <a class="stylebook_menu_a" onclick="clickFirstButton()"><<</a>
    <a class="stylebook_menu_a" onclick="clickBackButton()"><</a>
    <div class="stylebook_page" id="page">表紙</div>
    <a class="stylebook_menu_a" onclick="clickNextButton()">></a>
    <a class="stylebook_menu_a" onclick="clickFinalButton()">>></a>
</div>

<a class="back_btn_a_sp" onclick="history.back(-1);return false;"><div class="back_btn_div">戻る</div></a>

<script src="{{ asset('js/stylebook.js') }}"></script>
@endsection