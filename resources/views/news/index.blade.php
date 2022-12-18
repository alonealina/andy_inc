@extends('layouts.app')

@section('content')
<div class="news_flex">
    <div class="news_list">
        <div class="page_title">NEWS</div>
        @foreach ($news_list as $news)
        <a href="{{ route('news.show', ['id' => $news->id]) }}">
            <div class="news_list_box">
                <div class="top_news_date">{{ $news->notice_date }}</div>
                <div class="top_news_title">{{ $news->title }}</div>
            </div>
        </a>
        @endforeach
        <div class="page_div_news">
        {{ $news_list->links('pagination::default') }}
        </div>
    </div>

    @include('item.brand_list')
</div>

@endsection


@section('content_sp')
<div class="news_list_sp">
    <div class="page_title">NEWS</div>
    @foreach ($news_list as $news)
    <a href="{{ route('news.show', ['id' => $news->id]) }}">
        <div class="news_list_box">
            <div class="top_news_date_sp">{{ $news->notice_date }}</div>
            <div class="top_news_title_sp">{{ $news->title }}</div>
        </div>
    </a>
    @endforeach
    <div class="page_div_news page_div_news_sp">
    {{ $news_list->links('pagination::default') }}
    </div>
</div>

@include('item.brand_list_sp')


@endsection