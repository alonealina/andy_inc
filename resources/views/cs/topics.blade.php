@extends('layouts.app_cs')

@section('content')
<img src="{{ asset('img/topics_header.png') }}" class="company_img" alt="">
<div class="topics_genre_list">
    <a href="{{ route('cs.topics', ['genre' => 'all']) }}" class="topics_genre @if ($genre == 'all') current_topic @endif">ALL</a>
    <a href="{{ route('cs.topics', ['genre' => 'ship']) }}" class="topics_genre @if ($genre == 'ship') current_topic @endif">発送商品</a>
    <a href="{{ route('cs.topics', ['genre' => 'new']) }}" class="topics_genre @if ($genre == 'new') current_topic @endif">新作商品</a>
    <a href="{{ route('cs.topics', ['genre' => 'deadline']) }}" class="topics_genre @if ($genre == 'deadline') current_topic @endif">納期変更</a>
    <a href="{{ route('cs.topics', ['genre' => 'add']) }}" class="topics_genre @if ($genre == 'add') current_topic @endif">画像追加</a>
</div>

<div class="item_list">
    @foreach ($topic_list as $topic)
    <a href="{{ route('cs.item_detail', ['id' => $topic->id ]) }}" class="item_a">
        <div class="item_img_div">
            <img src="{{ asset('img/item_sample.png') }}" class="item_img" alt="">
            <div class="date_mark">2022.08.09</div>
        </div>
        <div class="item_detail_div">
            <div class="item_genre_list">
                @if($topic->ship_flg)
                <div class="blue_genre">発送商品</div>
                @endif
                @if($topic->new_flg)
                <div class="pink_genre">新作商品</div>
                @endif
                @if($topic->deadline_flg)
                <div class="orange_genre">納期変更</div>
                @endif
                @if($topic->add_img_flg)
                <div class="green_genre">画像追加</div>
                @endif
            </div>
            <div class="item_right_name">{{ $topic->name }}</div>
            <div class="item_right_text">{{ $topic->text }}</div>
        </div>
    </a>
    @endforeach
</div>

@endsection




@section('content_sp')
<a href="{{ route('cs.topics', ['genre' => 'all']) }}" class="topics_genre_sp @if ($genre == 'all') current_topic @endif" style="margin-top:100px;">ALL</a>
<div class="topics_genre_list_sp">
    <a href="{{ route('cs.topics', ['genre' => 'ship']) }}" class="topics_genre_sp @if ($genre == 'ship') current_topic @endif">発送商品</a>
    <a href="{{ route('cs.topics', ['genre' => 'new']) }}" class="topics_genre_sp @if ($genre == 'new') current_topic @endif">新作商品</a>
    <a href="{{ route('cs.topics', ['genre' => 'deadline']) }}" class="topics_genre_sp @if ($genre == 'deadline') current_topic @endif">納期変更</a>
    <a href="{{ route('cs.topics', ['genre' => 'add']) }}" class="topics_genre_sp @if ($genre == 'add') current_topic @endif">画像追加</a>
</div>

@foreach ($topic_list as $topic)
<a href="{{ route('cs.item_detail', ['id' => $topic->id ]) }}" class="item_a_sp">
    <div class="topic_img_div_sp">
        <img src="{{ asset('img/item_sample.png') }}" class="top_item_img_sp" alt="">
        <div class="date_mark">2022.08.09</div>
    </div>
    <div class="topic_detail_div">
        <div class="item_genre_list">
            @if($topic->ship_flg)
            <div class="blue_genre">発送商品</div>
            @endif
            @if($topic->new_flg)
            <div class="pink_genre">新作商品</div>
            @endif
            @if($topic->deadline_flg)
            <div class="orange_genre">納期変更</div>
            @endif
            @if($topic->add_img_flg)
            <div class="green_genre">画像追加</div>
            @endif
        </div>
        <div class="topic_right_name">{{ $topic->name }}</div>
        <div class="topic_right_text">{{ $topic->text }}</div>
    </div>
</a>
@endforeach

@endsection